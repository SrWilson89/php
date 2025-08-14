<?php
/*
    EJERCICIO 28
    Realiza un programa que dados dos 
    números enteros mayores que 0, 
    muestre su máximo común divisor. 
    El máximo común divisor de dos números 
    es el mayor número que divide a los dos.
    Ejemplo: Para los números 24 y 18
    La salida debería ser: 
    El máximo común divisor de 24 y 18 es 6
*/

$num1 = rand(1, 500);
$num2 = rand(1, 500);

$menor = $num1 < $num2 ? $num1 : $num2;
$mcd = 0;
for ($i = 2; $i <= $menor; $i++) {
    if ($num1 % $i == 0 && $num2 % $i == 0) {
        $mcd = $i;
    }
}

echo "El máximo común divisor de $num1 y $num2 es $mcd";
