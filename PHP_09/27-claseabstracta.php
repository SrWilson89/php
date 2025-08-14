<?php

abstract class Persona27{
    protected $nombre;
    protected $apellido;

    function __construct(
        $nom,
        $ape
    )
    {
        $this->nombre=$nom;
        $this->apellido=$ape;
    }

    public function getApe(){
	return $this->ape;
    }

    public function setApe($ape){
        $this->ape = $ape;
    }

    public function getNom(){
	return $this->nom;
    }

    public function setNom($nom){
        $this->nom = $nom;
    }

    function quienEres(){
        echo "Soy una persona ". $this->getNom();
    }
}

class Empleado27 extends Persona27{

    function quienEres(){
        echo "Soy un empleado ". $this->getNom();
    }
}

class Cliente27 extends Persona27{

    function quienEres(){
        echo "Soy un cliente ". $this->getNom();
    }
}

$personas=[];

$personas[]=new Empleado27("Pepe","Diaz");
$personas[]=new Cliente27("Juan","Diaz");
$personas[]=new Empleado27("Maria","Diaz");

foreach ($personas as $per){
    $per->quienEres();
}