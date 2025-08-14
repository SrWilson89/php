<?php
/*
    EJERCICIO 5
    Dada una nota entre 1 y 10 
    comprobar si está aprobado.
*/
$nota = rand(1, 10);
if ($nota >= 5) {
    echo "Estas aprobado";
} else {
    echo "Estas suspenso";
}
