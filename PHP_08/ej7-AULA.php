<!--
7. Crea las clases necesarias para modelar un colegio (alumnos,
profesores, aulas, asignaturas). Para simplificar suponer que en un aula
solo se da una asignatura y un profesor solo puede dar una asignatura.
Añade los atributos y métodos que veas necesarios.
-->

<?php

class Aula{
    private $asignadura;
    private $capacidad;
    private $profesor;
    private $pizarras;

    function __construct(
        Asignatura $asignatura,
        int $capacidad,
        Profesor $profesor,
        int $size_pizarra,
        string $tipo_pizzara
    )
    {
        $this ->asignatura =$asignatura;
        $this ->capacidad =$capacidad;
        $this ->profesor =$profesor;
    }
}
