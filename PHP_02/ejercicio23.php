<?php
/*
    EJERCICIO 23
    Escribe una tabla de multiplicar al azar entre 1 y 10.
    
    1 x 3 = 3
    2 x 3 = 6
    3 x 3 = 9
    ...
    10 x 3 = 30
*/

$tabla = random_int(1, 10);
echo "<h1>TABLA DE MULTIPLICAR DEL $tabla</h1>";
$i = 1;
while ($i <= 10) {
    $result = $i * $tabla;
    echo "$i x $tabla = $result<br>";
    $i++;
}
