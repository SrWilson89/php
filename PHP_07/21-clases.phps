<?php
class Persona
{
    public $nombre;
    private $apellidos;

    public function __construct(string $nombre, string $apellidos)
    {
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
    }

    function getApellidos()
    {
        return $this->apellidos;
    }
    function setApellidos(string $value)
    {
        $this->apellidos = $value;
    }
}

$pepe = new Persona("Pepe", "Viyuela Viyuela");

// var_dump($pepe);

echo $pepe->nombre;
echo $pepe->getApellidos();
