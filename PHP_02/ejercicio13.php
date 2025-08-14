<?php
/*
    EJERCICIO 13
    Crea un array cuyos elementos sea 
    los días de la semana. Escríbelos
    separados por coma.
*/
$dias = ["lunes", "martes", "miercoles", "jueves", "viernes", "sabado", "domingo"];

for ($i = 0; $i < count($dias); $i++) {
    echo $dias[$i];
    if ($i < count($dias) - 1) {
        echo ", ";
    }
}
