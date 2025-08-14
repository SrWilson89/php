<?php
/*
    EJERCICIO 38
    El desarrollo de la serie de Maclaurin 
    para el logaritmo neperiano es:

    ln(x) = (x−1) − (x−1)^2/2 + (x−1)^3/3 − (x−1)^4/4 + (x−1)^5/5 - ... , (0<x≤2)

    Escribir un programa que evalúe y muestre 
    por pantalla el valor de la serie con n términos, 
    donde x y n se introducen por teclado.

*/

$x = 1.2;
$n = 20;
$total = 0.0;

for ($i = 1; $i <= $n; $i++) {
    $total += pow(-1, $i - 1) * pow(($x - 1), $i) / $i;
}

echo "ln($x) = $total con $n términos.";
