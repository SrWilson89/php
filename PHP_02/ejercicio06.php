<?php
/*
    EJERCICIO 6
    Comprobar si un número está 
    entre el rango 15 y 25 incluidos.
*/
$num1 = rand(1, 50);

if ($num1 >= 15 && $num1 <= 25) {
    echo "$num1 está entre 15 y 25.";
} else {
    echo "$num1 no está entre 15 y 25";
}
