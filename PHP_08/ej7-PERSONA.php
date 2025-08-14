<?php

class Persona{
    private $Nombre;
    private $Apellidos;
    private $FechaNacimiento;
    private $DNI;

    function __construct(
        string $Nombre,
        string $Apellidos,
        string $FechaNacimiento,
        string $DNI=""
    )
    {
        $this->Nombre=$Nombre;
        $this->Apellidos=$Apellidos;
        $this->FechaNacimiento=$FechaNacimiento;
        $this->DNI=$DNI;
    }
}