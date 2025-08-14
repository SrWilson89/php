<?php
/*
    EJERCICIO 25
    Crea un array con 10 números aleatorios.
    Después calcula la suma de todos ellos
    y escribe el resultado.
*/

// Crea el array con 10 numeros aleatorios
$numeros = [];
$i = 1;
while ($i <= 10) {
    $numeros[] = random_int(1, 100);
    $i++;
}

// Calcular la suma
$suma = 0;
$pos = 0;
while ($pos < 10) {
    echo $numeros[$pos] . "<br>";
    $suma = $suma + $numeros[$pos];
    $pos++;
}

// escribir el resultado
echo "El resultado de la suma es: $suma";
