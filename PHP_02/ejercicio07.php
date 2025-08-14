<?php
/*
    EJERCICIO 7
    Dado un número entre 1 y 7 
    escribir el día que le corresponde.
*/
$dias = ["lunes", "martes", "miercoles", "jueves", "viernes", "sabado", "domingo"];
$dia = rand(1, 7);
$day = $dias[$dia - 1];
echo "el $dia es $day";
