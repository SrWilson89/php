<?php
/*
    EJERCICIO 22
    Escribe la tabla de multiplicar del 3.
    1 x 3 = 3
    2 x 3 = 6
    3 x 3 = 9
    ...
    10 x 3 = 30
*/
define("TABLA", 3);
// const TABLA = 3;

$i = 1;
while ($i <= 10) {
    $result = $i * TABLA;
    echo "$i x " . TABLA . " = $result<br>";
    $i++;
}
