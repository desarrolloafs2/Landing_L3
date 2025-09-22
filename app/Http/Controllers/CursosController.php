<?php

use App\Imports\CursosImport;
use Maatwebsite\Excel\Facades\Excel;

class DigitalTransformationV4Controller extends Controller
{
    public function index()
    {
        // Leer el Excel como array
        $data = Excel::toArray(new CursosImport, storage_path('app/cursos.xlsx'));

        // Quitar la fila de encabezados
        $courses = array_slice($data[0], 1);

        // Convertir cada fila en array asociativo
        $courses = array_map(function($row){
            return [
                'titulo' => $row[0] ?? '',
                'horario' => $row[3] ?? '',
                'inicio' => $row[5] ?? '',
                'modalidad' => $row[14] ?? '',
                'duracion' => $row[4] ?? '',
                'convocatoria' => $row[1] ?? '',
                'imagen' => 'images/Imagenes-L3-3.png',
            ];
        }, $courses);

        // Pasar $courses a la vista
        return view('transformacion-digital-v4', compact('courses'));
    }
}