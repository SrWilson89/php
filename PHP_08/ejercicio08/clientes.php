<?php
class Clientes{
    protected $nombre;
    protected $apellido;
    protected $DNI;
    protected $direccion;
    protected $fechaNac;
    protected $telefono;

    public function __construct(
        string $DNI,
        string $nombre,
        string $apellido,
        string $direccion,
        string $fechaNac,
        string $telefono
        )

        {
            $this->nombre = $nombre;
            $this->DNI = $DNI;
            $this->fechaNac = $fechaNac;
            $this->apellido = $apellido;
            $this->direccion = $direccion;
            $this->telefono = $telefono;
        }


    public function getApellido(){
	return $this->apellido;
    }

    public function getNombre(){
	return $this->nombre;
    }
    }