<?php
include "Aula.php";
class Colegio
{
    private $nombre;
    private $direccion;
    private $profesores;
    private $alumnos;
    private $asignaturas;
    private $aulas;

    function __construct(
        string $nombre,
        string $direccion
    ) {
        $this->nombre = $nombre;
        $this->direccion = $direccion;
        $this->aulas = [];
        $this->asignaturas = [];
        $this->profesores = [];
        $this->alumnos = [];
    }

    function __destruct()
    {
        $this->aulas = null;
    }

    function crearAula(
        Asignatura $asignatura,
        int $capacidadMaxima,
        Profesor $profesor,
        int $size_pizarra,
        string $tipo_pizarra
    ) {
        $this->aulas[] = new Aula(
            $asignatura,
            $capacidadMaxima,
            $profesor,
            $size_pizarra,
            $tipo_pizarra
        );
    }

    function agregarAsignatura(Asignatura $asignatura)
    {
        $this->asignaturas[] = $asignatura;
    }

    function agregarProfesor(Profesor $profesor)
    {
        $this->profesores[] = $profesor;
    }

    function agregarAlumno(Alumno $alumno)
    {
        $this->alumnos[] = $alumno;
    }

    function escribirInfo()
    {
        echo $this->nombre . "<br>";
        echo "Número de profesores: " . count($this->profesores) . "<br>";
        echo "Número de alumnos: " . count($this->alumnos) . "<br>";
        echo "Número de aulas: " . count($this->aulas) . "<br><br>";
    }
}
