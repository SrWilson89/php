<?php
include_once "Persona.php";

class Profesor extends Persona
{
    private $asignatura;

    function __construct(
        string $nombre,
        string $apellidos,
        string $fechaNacimiento,
        string $dni,
        Asignatura $asignatura
    ) {
        parent::__construct(
            $nombre,
            $apellidos,
            $fechaNacimiento,
            $dni
        );
        $this->asignatura = $asignatura;
    }
}
