<?php

namespace App\Services;

use App\Imports\CursosImport;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Maatwebsite\Excel\Facades\Excel;

class CourseService
{
    protected string $excelUrl;

    public function __construct(?string $excelUrl = null)
    {
        $this->excelUrl = $excelUrl ?? 'https://afscentroformacion.sharepoint.com/:x:/g/comun/EYR7USt61-pAo9GzZy8Cp98B7ZNycWbPw9xfN_cPovOFNQ?e=WVqTux'; 
    }

    public function getCourses(): array
    {
        try {
            $response = Http::get($this->excelUrl);

            if (!$response->successful()) {
                Log::error("No se pudo descargar el Excel desde SharePoint. Código: ".$response->status());
                return [];
            }

            $tempFile = tmpfile();
            fwrite($tempFile, $response->body());
            $meta = stream_get_meta_data($tempFile);
            $path = $meta['uri'];

            $data = Excel::toArray(new CursosImport, $path);

            if (empty($data) || empty($data[0])) {
                Log::warning("El Excel en SharePoint está vacío o mal formateado.");
                return [];
            }

            $rows = array_slice($data[0], 1);

            return array_map(function ($row) {
                return [
                    'titulo'       => $row[0] ?? '',
                    'horario'      => $row[1] ?? '',
                    'inicio'       => $row[2] ?? '',
                    'modalidad'    => $row[3] ?? '',
                    'duracion'     => $row[4] ?? '',
                    'convocatoria' => $row[5] ?? '',
                    'imagen'       => 'images/Imagenes-L3-3.png',
                ];
            }, $rows);

        } catch (\Throwable $e) {
            Log::error("Error al leer Excel remoto: ".$e->getMessage());
            return [];
        }
    }
}
