<?php
/*
    EJERCICIO 10
    Genera tres números aleatorios y 
    escribe el mayor.
*/
$num1 = rand(1, 100);
$num2 = rand(1, 100);
$num3 = rand(1, 100);

if ($num1 > $num2 && $num1 > $num3) {
    echo "$num1 es mayor que $num2 y $num3";
} else if ($num2 > $num3) {
    echo "$num2 es mayor que $num1 y $num3";
} else {
    echo "$num3 es mayor que $num1 y $num2";
}
