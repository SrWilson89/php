<?php
/*
    EJERCICIO 9    
    Genera dos números aleatorios 
    y escribe el mayor.
*/
$num1 = rand(1, 100);
$num2 = rand(1, 100);
if ($num1 > $num2) {
    echo "$num1 es mayor que $num2";
} else {
    echo "$num2 es mayor que $num1";
}
