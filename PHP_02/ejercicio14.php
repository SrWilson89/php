<?php
/*
    EJERCICIO 14
    Crea un array con las frutas: 
    manzana, mandarina, pera, plátano y fresa. 
    Escribe una fruta aleatoriamente.
*/
$frutas = ["manzana", "mandarina", "pera", "platano", "fresa"];

$pos = rand(0, count($frutas) - 1);

echo $frutas[$pos];
