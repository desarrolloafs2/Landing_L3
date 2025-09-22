<?php

namespace App\Models;

class Course
{
    public $titulo;
    public $horario;
    public $inicio;
    public $modalidad;
    public $duracion;
    public $convocatoria;
    public $imagen;

    public function __construct(array $data)
    {
        $this->titulo       = $data['titulo'] ?? '';
        $this->horario      = $data['horario'] ?? '';
        $this->inicio       = $data['inicio'] ?? '';
        $this->modalidad    = $data['modalidad'] ?? '';
        $this->duracion     = $data['duracion'] ?? '';
        $this->convocatoria = $data['convocatoria'] ?? '';
        $this->imagen       = $data['imagen'] ?? 'images/Imagenes-L1-1.png';
    }
}