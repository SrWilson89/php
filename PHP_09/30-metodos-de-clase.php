<?php
// METODOS DE CLASE

class Persona
{
    protected $nombre;
    protected $apellidos;
    static $contador = 0;
    function __construct(String $nom, String $ape)
    {
        $this->nombre = $nom;
        $this->apellidos = $ape;
        Persona::$contador++;
    }
    function __destruct()
    {
        Persona::$contador--;
    }
    static function imprimirNumeroPersonas()
    {
        echo PERSONA::$contador;
    }
}

$per = new Persona("Pepe", "Garcias");
$per1 = new Persona("Fermin", "Lopez");
$per2 = new Persona("Felipe", "Fernandez");

PERSONA::imprimirNumeroPersonas();
