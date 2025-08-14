<?php
/*
    EJERCICIO 36
    Calcula el factorial de un número. 
    El factorial de n es:
    n! = n * n-1 * n-2 * … * 1
    Ejemplo: 5! = 5 * 4 * 3 * 2 * 1
*/

echo "Factorial de 5: " . factorial(5);
echo "<br>Factorial de 7: " . factorial(7);
echo "<br>Factorial de 11: " . factorial(11);

function factorial(int $n)
{
    $res = 1;
    for ($i = 2; $i <= $n; $i++) {
        $res *= $i;
    }
    return $res;
}
