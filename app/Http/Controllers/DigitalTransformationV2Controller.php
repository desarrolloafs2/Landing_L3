<?php

namespace App\Http\Controllers;

use App\Models\Access;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Http;

class DigitalTransformationV2Controller extends Controller
{
    function index(Request $request) {
        if(isset($request['qr'])){
            if (!$request->hasCookie('tracked')) {
                $record = Access::where('origen', 'QR-V2')->first();
                $alreadyTracked = Cookie::forever('tracked', 'access');

                if(!$record){
                    Access::create([
                        'origen' => 'QR-V2',
                        'accesos' => 1,
                        'registros' => 0,
                    ]);
                }else{
                    $record->accesos+= 1;
                    $record ->save();
                }
                return response()->view('transformacion-digital-v2')->cookie($alreadyTracked);
            }
        }
        return view('transformacion-digital-v2');
    }


    function storeData(Request $request): RedirectResponse
    {
        $name = htmlspecialchars($request['name']);
        $surnames = htmlspecialchars($request['surnames']);
        $email = htmlspecialchars($request['email']);
        $phone = htmlspecialchars($request['phone']);
        $current_position = htmlspecialchars($request['current_position']);
        $contact_way = htmlspecialchars($request['contact_way']);

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

        Http::post('https://www.grupoafs.com/FormToDynamics/public/api', $data);

        if(isset($request['qr'])){
            if ($request->cookie('tracked') === 'access') {

                $alreadyRegistered = Cookie::forever('tracked', 'registered');

                $record = Access::where('origen', 'QR-V2')->first();

                if($record){
                    $record->registros+= 1;
                    $record ->save();
                }

                return redirect('https://afsformacion.com/gracias-por-preinscribirte/')->cookie($alreadyRegistered);
            }
        };

        return redirect('https://afsformacion.com/gracias-por-preinscribirte/');
    }
}
