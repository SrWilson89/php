<!--
7. Crea las clases necesarias para modelar un colegio (alumnos,
profesores, aulas, asignaturas). Para simplificar suponer que en un aula
solo se da una asignatura y un profesor solo puede dar una asignatura.
Añade los atributos y métodos que veas necesarios.
-->

<?php

class Alumno extends Persona{

    private $Matricula;
    private $Notas;

    function __construct(
        int $Matricula,
        string $Nombre,
        string $Apellidos,
        string $FechaNacimiento,
        string $DNI ="",
        )
    {
        $this->Matricula=$Matricula;
        parent::__construct(
        $Nombre,
        $Apellidos,
        $FechaNacimiento,
        $DNI);
        $this->Notas=[];
    }

    function agregarNota(Asignatura $asignatura, float $nota){
        $this->Notas[] =["asignatura" => $asignatura,"nota" => $nota];
    }
}

