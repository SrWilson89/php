<?php

class Cliente
{
    protected $dni;
    protected $nombre;
    protected $apellidos;
    protected $direccion;
    protected $fechaNacimiento;
    protected $telefono;

    function __construct(
        String $dni,
        String $nombre,
        String $apellidos,
        String $direccion,
        String $fechaNacimiento,
        String $telefono
    ) {
        $this->dni = $dni;
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
        $this->direccion = $direccion;
        $this->fechaNacimiento = $fechaNacimiento;
        $this->telefono = $telefono;
    }

    /**
     * Get the value of nombre
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Get the value of apellidos
     */
    public function getApellidos()
    {
        return $this->apellidos;
    }
}
