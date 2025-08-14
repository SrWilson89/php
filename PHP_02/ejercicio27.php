<?php
/*
    EJERCICIO 27
    Calcula el producto de dos números positivos 
    cualesquiera, usando solo el operador suma.
*/

$num1 = rand(1, 10);
$num2 = rand(1, 10);

$suma = 0;
for ($i = 1; $i <= $num2; $i++) {
    $suma += $num1;
}

echo "$num1 x $num2 = $suma";
