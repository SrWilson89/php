<?php
require_once "vendor/autoload.php";

echo "hola mundo<br>";

if (isset($_GET["name"])) {
    saludar($_GET["name"]);
}
/**
 * Representa el numero PI en matemáticas.
 * 
 * @var PI Numero Pi
 */
const PI = 3.1416;

/**
 * Escribe el saludo a una persona
 * 
 * @param $name Nombre de la persona 
 */
function saludar(string $name) {
    echo "Hola $name<br>";
}
