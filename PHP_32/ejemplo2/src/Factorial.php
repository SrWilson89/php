<?php
/*
    EJERCICIO 36
    Calcula el factorial de un número. 
    n es un entero positivo.
    El factorial de n es:
    n! = n * n-1 * n-2 * … * 1
    Ejemplo: 5! = 5 * 4 * 3 * 2 * 1
*/

class Factorial {
    function evaluar(int $n) {
        if ($n < 0) return 0;
        $res = 1;
        for ($i = 2; $i <= $n; $i++) {
            $res *= $i;
        }
        return $res;
    }
}
