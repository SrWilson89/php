<?php
/*
    EJERCICIO 20
    Guarda en un array los números menores de 500 que sean
    divisibles de 3.
*/

$divisibles3 = [];

$contador = 1;
while ($contador <= 500) {
    if ($contador % 3 == 0) {
        $divisibles3[] = $contador;
    }
    $contador++;
}

var_dump($divisibles3);
