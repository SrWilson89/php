<?php
/*
EJERCICIO 7
    Crea las clases necesarias para modelar
    un colegio (alumnos, profesores, aulas, 
    asignaturas).+
    Para simplificar suponer que en un aula 
    solo se da una asignatura y un profesor 
    solo puede dar una asignatura).
    Añade los atributos y métodos que veas 
    necesarios.
*/
include_once "Colegio.php";
include_once "Asignatura.php";
include_once "Profesor.php";
include_once "Alumno.php";

$colegio = new Colegio("Campus Omega", "C/ Alvarado, 28");

// AULA 1
$matematicas = new Asignatura(1, "Matemáticas");
$pepe = new Profesor(
    "Pepe",
    "Viyuela",
    "1980/03/25",
    "12345678A",
    $matematicas
);
$colegio->crearAula($matematicas, 25, $pepe, 200, "rotulador");

// AULA 2
$lengua = new Asignatura(2, "Leguaje");
$fermin = new Profesor(
    "Fermín",
    "Trujillo",
    "1982/05/20",
    "12345678B",
    $lengua
);
$colegio->crearAula($lengua, 25, $fermin, 250, "tiza");

// AULA 3
$info = new Asignatura(3, "Informática");
$claudio = new Profesor(
    "Juan Claudio",
    "Martin",
    "1973/11/11",
    "12345678c",
    $info
);
$colegio->crearAula($info, 30, $claudio, 220, "digital");

$colegio->agregarProfesor($pepe);
$colegio->agregarProfesor($fermin);
$colegio->agregarProfesor($claudio);

$colegio->agregarAsignatura($matematicas);
$colegio->agregarAsignatura($lengua);
$colegio->agregarAsignatura($info);

// $colegio->escribirInfo();

$alu1 = new Alumno(
    1,
    "angel",
    "garcia",
    "2000/09/12",
    "12345678L"
);
$colegio->agregarAlumno($alu1);

$colegio->escribirInfo();

$alu1->listarNotas();
