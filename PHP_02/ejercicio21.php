<?php
/*
    EJERCICIO 21
    Genera 1000 números aleatorios entre 1 y 100.
    Guarda en un array los números divisibles por 7 u 11.
*/
$divisible = [];

$contador = 1;
while ($contador <= 1000) {
    $num = random_int(1, 100);
    if ($num % 7 == 0 || $num % 11 == 0) {
        $divisible[] = $num;
    }
    $contador++;
}

var_dump($divisible);
