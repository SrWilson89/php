<!--
7. Crea las clases necesarias para modelar un colegio (alumnos,
profesores, aulas, asignaturas). Para simplificar suponer que en un aula
solo se da una asignatura y un profesor solo puede dar una asignatura.
Añade los atributos y métodos que veas necesarios.
-->

<?php

class Colegio{
    private $nombre;
    private $direccion;
    private $profesores;
    private $alumnos;
    private $asignaturas;
    private $aulas;


    function __construct(int $nombre, string $direccion)
    {
        $this->$nombre=$nombre;
        $this->$direccion=$direccion;
        $this->aulas=[];
        $this->asignaturas=[];
        $this->profesores=[];
        $this->alumnos=[];
    }

    function crearAula(
        Asignatura $asignatura,
        int $capacidad,
        Profesor $profesor
    ){
        //$this->aulas[]=new Aula($asignatura, $capacidad, $profesor);
    }

    function __destruct()
    {
        $this->aulas=null;
    }
}