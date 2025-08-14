<!--
7. Crea las clases necesarias para modelar un colegio (alumnos,
profesores, aulas, asignaturas). Para simplificar suponer que en un aula
solo se da una asignatura y un profesor solo puede dar una asignatura.
Añade los atributos y métodos que veas necesarios.
-->

<?php

$colegio = new Colegio("Campus Omega", "C/ Alvarado, 28");
$matematicas = new Asignatura(1,"Matematicas");
$profesor1 = new Profesor(
    "Pepe", "Diaz Sanchez",
    "1980/03/25", "05546879P",
    $matematicas);

$colegio->crearAula($matematicas, 50, $profesor1);

$lengua = new Asignatura(2,"Lengua");
$profesor2 = new Profesor(
    "Juan", "Diaz Sanchez",
    "1980/03/25", "05545879P",
    $lengua);

$colegio->crearAula($lengua, 50, $profesor2);

$ingles = new Asignatura(2,"Lengua");
$profesor3 = new Profesor(
    "Monica", "Franco Sanchez",
    "1980/03/25", "03545879P",
    $ingles);

$colegio->crearAula($ingles, 50, $profesor3);