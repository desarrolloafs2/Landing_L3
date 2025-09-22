<?php

namespace App\Http\Controllers;

use App\Models\Access;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Log;
use App\Services\SharePointCourseService;

class DigitalTransformationV4Controller extends Controller
{
    /**
     * Muestra la landing de Transformación Digital con cursos desde SharePoint.
     */
    public function index(Request $request)
    {
        $sharePointUrl = 'https://afscentroformacion.sharepoint.com/:x:/r/comun/_layouts/15/Doc.aspx?sourcedoc={2B517B84-D77A-40EA-A3D1-B3672F02A7DF}&file=Cursos Web.xlsx&action=default&mobileredirect=true';

        $service = new SharePointCourseService();
        $courses = $service->getCourses();


        try {
            // --- 1️⃣ Inicializamos el service que lee el Excel online ---
            $courseService = new SharePointCourseService();
            $courses = $courseService->getCourses($sharePointUrl); // obtiene un array de cursos
        } catch (\Exception $e) {
            Log::error('Error al obtener cursos desde SharePoint: ' . $e->getMessage());
        }

        // --- 2️⃣ Lógica de tracking QR ---
        if (isset($request['qr']) && !$request->hasCookie('tracked')) {
            $record = Access::firstOrCreate(
                ['origen' => 'QR-V4'],
                ['accesos' => 0, 'registros' => 0]
            );
            $record->increment('accesos');

            $cookie = Cookie::forever('tracked', 'access');

            return response()
                ->view('transformacion-digital-v4', compact('courses'))
                ->cookie($cookie);
        }

        // --- 3️⃣ Vista normal si no es QR ---
        return view('transformacion-digital-v4', compact('courses'));
    }

    /**
     * Procesa el formulario de preinscripción.
     */
    public function storeData(Request $request): RedirectResponse
    {
        // Sanitizamos campos
        $name = htmlspecialchars($request['name']);
        $surnames = htmlspecialchars($request['surnames']);
        $email = htmlspecialchars($request['email']);
        $phone = htmlspecialchars($request['phone']);
        $current_position = htmlspecialchars($request['current_position']);
        $contact_way = htmlspecialchars($request['contact_way']);

        // Construimos los campos para el API externo
        $fields = [
            null,
            $email,
            null,
            $surnames,
            null,
            $phone,
            null,
            null,
            null,
            null,
            $name,
            null,
            null,
            null,
            $current_position,
            $contact_way
        ];

        $data = [
            'crm_code' => self::$crm_code_marketing,
            'wpforms' => ['fields' => $fields],
            'observations' => 'landingsEOI'
        ];

        // Enviamos los datos al API externo
        \Illuminate\Support\Facades\Http::post('https://www.grupoafs.com/FormToDynamics/public/api', $data);

        // --- Si venimos de QR, actualizamos cookie y registro ---
        if (isset($request['qr']) && $request->cookie('tracked') === 'access') {
            $alreadyRegistered = Cookie::forever('tracked', 'registered');

            $record = Access::where('origen', 'QR-V4')->first();
            if ($record) {
                $record->increment('registros');
            }

            return redirect('https://afsformacion.com/gracias-por-preinscribirte/')
                ->cookie($alreadyRegistered);
        }

        // Redirigimos normalmente si no hay QR
        return redirect('https://afsformacion.com/gracias-por-preinscribirte/');
    }


}