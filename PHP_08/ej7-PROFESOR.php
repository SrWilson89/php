<!--
7. Crea las clases necesarias para modelar un colegio (alumnos,
profesores, aulas, asignaturas). Para simplificar suponer que en un aula
solo se da una asignatura y un profesor solo puede dar una asignatura.
Añade los atributos y métodos que veas necesarios.
-->

<?php

class Profesor extends Persona{
    private $Asignatura;

    function __construct(
        string $Nombre,
        string $Apellidos,
        string $FechaNacimiento,
        string $DNI,
        Asignatura $Asignatura
    )
    {
        $this->Asignatura=$Asignatura;
        parent::__construct(
            $Nombre,
            $Apellidos,
            $FechaNacimiento,
            $DNI);
    }

}
