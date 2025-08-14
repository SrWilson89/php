<?php
/*
    EJERCICIO 11
    Crea dos variables con números aleatorios 
    del 1 al 50. Comprueba si el primero es 
    divisible por el segundo.
*/
$num1 = rand(1, 50);
$num2 = rand(1, 50);
echo "$num1 y $num2<br>";
if ($num1 % $num2 === 0) {
    echo "$num1 es divisible por $num2<br>";
}
