<?php
/*
    EJERCICIO 15
    Crea un array de animales: perro, gato, tortuga. 
    a. Escribe el segundo animal.
    b. Añade un nuevo animal, por ejemplo, elefante.
    c. Sustituye tortuga por camello.
    d. Intercambia dos posiciones de forma aleatoria.
*/
$animales = ["perro", "gato", "tortuga"];

echo "El segundo animal es $animales[1]<br>";

$animales[] = "elefante";

$animales[2] = "camello";

$pos1 = rand(0, count($animales) - 1);
$pos2 = rand(0, count($animales) - 1);

$aux = $animales[$pos2];
$animales[$pos2] = $animales[$pos1];
$animales[$pos1] = $aux;

var_dump($animales);
