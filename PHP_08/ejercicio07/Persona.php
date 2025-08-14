<?php

class Persona
{
    protected $dni;
    protected $nombre;
    protected $apellidos;
    protected $fechaNacimiento;

    function __construct(
        string $nombre,
        string $apellidos,
        string $fechaNacimiento,
        string $dni = ""
    ) {
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
        $this->fechaNacimiento = $fechaNacimiento;
        $this->dni = $dni;
    }
}
