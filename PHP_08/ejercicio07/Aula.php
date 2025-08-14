<?php
include "Pizarra.php";

class Aula
{
    private $asignatura;
    private $capacidadMaxima;
    private $profesor;
    private $pizarra;

    function __construct(
        Asignatura $asignatura,
        int $capacidadMaxima,
        Profesor $profesor,
        int $size_pizarra,
        string $tipo_pizarra
    ) {
        $this->asignatura = $asignatura;
        $this->capacidadMaxima = $capacidadMaxima;
        $this->profesor = $profesor;
        $this->pizarra = new Pizarra($size_pizarra, $tipo_pizarra);
    }
}

