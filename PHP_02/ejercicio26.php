<?php
/*
    EJERCICIO 26
    Generar 1000 numeros aleatorios entre 1 y 10
    Contar cuantos numeros de cada ha salido
*/

$contadores = [0, 0, 0, 0, 0, 0, 0, 0, 0, 0];

for ($i = 1; $i <= 1000; $i++) {
    $num = random_int(1, 10);
    $contadores[$num - 1] = $contadores[$num - 1] + 1;
}


for ($c = 0; $c < 10; $c++) {
    echo "Contador de " . ($c + 1) . " = " . $contadores[$c] . "<br>";
}
