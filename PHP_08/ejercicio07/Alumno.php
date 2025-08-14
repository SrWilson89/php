<?php
include_once "Persona.php";

class Alumno extends Persona
{
    private $matricula;
    private $notas;

    function __construct(
        int $matricula,
        string $nombre,
        string $apellidos,
        string $fechaNacimiento,
        string $dni = ""
    ) {
        parent::__construct(
            $nombre,
            $apellidos,
            $fechaNacimiento,
            $dni
        );
        $this->matricula = $matricula;
        $this->notas = [];
    }

    function agregarNota(Asignatura $asignatura,  float $nota)
    {
        $this->notas[] = ["asignatura" => $asignatura, "nota" => $nota];
    }

    function listarNotas()
    {
        echo "Listado de notas de $this->nombre $this->apellidos<br>";
        for($i=0;$i<count($this->notas);$i++){
            echo $this->notas[$i]["asignatura"]->getNombre().": ".
            $this->notas[$i]["nota"] ."<br>";
        }
    }
}
