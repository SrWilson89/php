<?php
// VARIABLES DE CLASE

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
    function imprimir()
    {
        echo "$this->nombre $this->apellidos<br>";
    }

    /**
     * Set the value of nombre
     *
     * @return  self
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }
    function clone()
    {
        return new Persona($this->nombre, $this->apellidos);
    }
}

$per = new Persona("Pepe", "Garcias");
$per1 = new Persona("Fermin", "Lopez");
$per2 = new Persona("Felipe", "Fernandez");
$per2->imprimir();
$per3 = $per2;
if ($per3 === $per2) {
    echo "Son iguales<br>";
} else {
    echo "No son iguales<br>";
}
$per3->imprimir();

$per2->setNombre("Federico");

$per3->imprimir();
PERSONA::imprimirNumeroPersonas();
$per = null;
PERSONA::imprimirNumeroPersonas();
$per2 = null;
PERSONA::imprimirNumeroPersonas();
$per3 = null;
PERSONA::imprimirNumeroPersonas();

$per4 = $per1->clone();
$per4->imprimir();
$per1->imprimir();
PERSONA::imprimirNumeroPersonas();

if ($per1 === $per4) {
    echo "Son iguales";
} else {
    echo "No son iguales";
}
