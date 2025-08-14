<?php
/*
    EJERCICIO 34
    Se proporcionan por teclado las calificaciones 
    de un examen (entre 0 y 10). Diseñar un 
    algoritmo que muestre por pantalla la media 
    de la clase y el número de aprobados 
    (calificaciones superiores o iguales a 5). 
    La introducción de calificaciones terminará 
    cuando se teclee el valor -1.  
*/
$count = 0;
$suma = 0;
$aprobados = 0;
do {
    $nota = rand(-1, 10);
    if ($nota > -1) {
        $count++;
        $suma += $nota;
        if ($nota >= 5) {
            $aprobados++;
        }
    }
} while ($nota != -1);

if ($count > 0) {
    echo "Alumnos: $count";
    echo "<br>Media: " . ($suma / $count);
    echo "<br>Número de aprobados: $aprobados";
} else {
    echo "No hay alumnos !!!!";
}
