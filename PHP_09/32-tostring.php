<?php
// __toString()

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

    function __toString()
    {
        return $this->nombre;
    }
}

$per = new Persona("Pepe", "Garcias");
$per1 = new Persona("Fermin", "Lopez");
$per2 = new Persona("Felipe", "Fernandez");

echo $per1 . "<br>";
