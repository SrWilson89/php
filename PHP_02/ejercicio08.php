<?php
/*
    EJERCICIO 8
    Si una variable booleana es true 
    escribe “activo” en caso contrario 
    escribe “inactivo”.
*/
$activo = boolval(rand(0, 1));

if ($activo) {
    echo "activo";
} else {
    echo "inactivo";
}
