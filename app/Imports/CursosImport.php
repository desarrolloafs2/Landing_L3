<?php

namespace App\Imports;

use Maatwebsite\Excel\Concerns\ToCollection;
use Illuminate\Support\Collection;

class CursosImport implements ToCollection
{
    public function collection(Collection $rows)
    {
        return $rows;
    }
}