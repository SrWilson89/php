<?php
/*
    EJERCICIO 3
    Dada una edad entre 0 y 100 
    escribir si es mayor de edad.
*/
$edad = rand(0, 100);
if ($edad >= 18) {
    echo "Con $edad años eres mayor de edad";
} else {
    echo "Con $edad eres menor de edad";
}
