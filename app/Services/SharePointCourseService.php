<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\CursosImport;
use PhpOffice\PhpSpreadsheet\IOFactory;

class SharePointCourseService
{
    /**
     * Obtiene token de Microsoft Graph
     */
    protected function getAccessToken()
    {
        $tenantId = env('AZURE_TENANT_ID');
        $clientId = env('AZURE_CLIENT_ID');
        $clientSecret = env('AZURE_CLIENT_SECRET');

        $response = Http::asForm()->post("https://login.microsoftonline.com/$tenantId/oauth2/v2.0/token", [
            'grant_type'    => 'client_credentials',
            'client_id'     => $clientId,
            'client_secret' => $clientSecret,
            'scope'         => 'https://graph.microsoft.com/.default',
        ]);

        if (!$response->ok()) {
            throw new \Exception('Error obteniendo token: ' . $response->body());
        }

        return $response->json()['access_token'];
    }

    /**
     * Obtiene siteId a partir del sitePath (ej: /comun)
     */
    protected function getSiteId($token, $sitePath)
    {
        $response = Http::withToken($token)
            ->get("https://graph.microsoft.com/v1.0/sites/afscentroformacion.sharepoint.com:$sitePath");

        if (!$response->ok() || !isset($response->json()['id'])) {
            throw new \Exception('SiteId no encontrado: ' . $response->body());
        }

        return $response->json()['id'];
    }

    /**
     * Obtiene el driveId de la librería principal
     */
    protected function getDriveId($token, $siteId)
    {
        $response = Http::withToken($token)
            ->get("https://graph.microsoft.com/v1.0/sites/$siteId/drives");

        if (!$response->ok() || empty($response->json()['value'])) {
            throw new \Exception('Drives no encontrados: ' . $response->body());
        }

      
        $drive = collect($response->json()['value'])->firstWhere('name', 'Documents');
        if (!$drive) {
            $drive = collect($response->json()['value'])->first(); // fallback
        }

        return $drive['id'];
    }

    /**
     * Descarga el Excel desde Graph y lo guarda localmente
     */
    protected function downloadExcel($token, $driveId, $fileName)
    {
   
        $childrenResponse = Http::withToken($token)
            ->get("https://graph.microsoft.com/v1.0/drives/$driveId/root/children");

        $folder = collect($childrenResponse->json()['value'])
            ->firstWhere('name', '02 CURSOS WEB');

        if (!$folder) {
            throw new \Exception('Carpeta "02 CURSOS WEB" no encontrada');
        }

        $folderId = $folder['id'];


        $filesResponse = Http::withToken($token)
            ->get("https://graph.microsoft.com/v1.0/drives/$driveId/items/$folderId/children");

        $file = collect($filesResponse->json()['value'])
            ->firstWhere('name', $fileName);

        if (!$file) {

            $fileNames = collect($filesResponse->json()['value'])->pluck('name')->implode(', ');
            throw new \Exception("Archivo '$fileName' no encontrado en la carpeta. Archivos encontrados: $fileNames");
        }


        $downloadResponse = Http::withToken($token)
            ->get("https://graph.microsoft.com/v1.0/drives/$driveId/items/{$file['id']}/content");

        if (!$downloadResponse->ok()) {
            throw new \Exception('Error descargando Excel: ' . $downloadResponse->body());
        }

        file_put_contents(storage_path('app/cursos.xlsx'), $downloadResponse->body());
    }




    /**
     * Punto de entrada principal: obtiene los cursos del Excel en SharePoint
     */
    public function getCourses(string $sitePath = '/comun', string $fileName = 'Cursos Web.xlsx')
    {
        $token = $this->getAccessToken();

        $siteId = $this->getSiteId($token, $sitePath);
        $driveId = $this->getDriveId($token, $siteId);

        $this->downloadExcel($token, $driveId, $fileName);

        $spreadsheet = IOFactory::load(storage_path('app/cursos.xlsx'));
        $sheet = $spreadsheet->getActiveSheet();
        $rows = $sheet->toArray(null, true, true, false);

        if (empty($rows)) {
            return [];
        }

        // Quitamos la primera fila (cabeceras)
        array_shift($rows);

        // Filtramos por la columna de convocatoria (ej: columna 1 = "Código CRM")
        $filtered = array_filter($rows, function ($row) {
            return stripos($row[1] ?? '', 'L3') !== false;
        });

        // Mapeamos columnas -> claves que espera Blade
        $mapped = array_map(function ($row) {
            return [
                'titulo'   => $row[0] ?? '',  
                'horario'  => $row[3] ?? '', 
                'modalidad'=> $row[14] ?? '', 
                'inicio'   => $row[5] ?? '',
                'duracion' => $row[4] ?? '',  
                'imagen'   => $row[7] ?? null 
            ];
        }, $filtered);

        return array_values($mapped);
    }


}