<?php
/*
    EJERCICIO 18:
    Crear un array con 10 números aleatorios 
    entre 1 y 50 (usa while) y escríbelos.
*/
$numeros = [];

$i = 0;
while ($i < 10) {
    $numeros[] = rand(1, 50);
    $i++;
}
