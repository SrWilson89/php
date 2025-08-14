<?php
/*
    EJERCICIO 19
    Guarda en un array los 20 primeros números pares.
*/

$pares = []; // array donde guardamos los numeros pares

$par = 0;
while ($par < 40) {
    $pares[] = $par;
    $par += 2;  // $par = $par + 2
}

var_dump($pares);
