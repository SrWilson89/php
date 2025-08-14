<?php
/*
    EJERCICIO 35
    Escribir todos los números primos 
    entre 2 y 10000, ambos inclusive.
*/

for ($i = 2; $i <= 10000; $i++) {
    if (esPrimo($i)) {
        echo $i . ", ";
    }
}

function esPrimo(int $n)
{
    $primo = true;
    for ($i = 2; $i < $n; $i++) {
        if ($n % $i == 0) {
            $primo = false;
        }
    }
    return $primo;
}
