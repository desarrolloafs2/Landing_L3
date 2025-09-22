<?php

namespace App\Services;

use App\Imports\CursosImport;
use Maatwebsite\Excel\Facades\Excel;

class CourseService
{
    protected $excelPath;

    public function __construct($excelPath = null)
    {
        $this->excelPath = $excelPath ?? storage_path('app/cursos.xlsx');
    }

    public function getCourses(): array
    {
        if (!file_exists($this->excelPath)) {
            return [];
        }

        // Leer Excel usando la clase de import
        $data = Excel::toArray(new CursosImport, $this->excelPath);

        if (empty($data) || empty($data[0])) {
            return [];
        }

        $rows = array_slice($data[0], 1); // quitamos encabezados

        return array_map(function ($row) {
            return [
                'titulo'    => $row[0] ?? '',
                'horario'   => $row[1] ?? '',
                'inicio'    => $row[2] ?? '',
                'modalidad' => $row[3] ?? '',
                'duracion'  => $row[4] ?? '',
            ];
        }, $rows);
    }
}