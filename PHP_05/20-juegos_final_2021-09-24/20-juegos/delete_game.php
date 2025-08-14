<?php
include "funciones.php";
// var_dump($_GET);
if (isset($_GET["delete"])) {
    $games = leer_videojuegos();
    $pos = $_GET["delete"];
    array_splice($games, $pos, 1);
    guardar_todo($games);
    header("location: index.php");
} else {
    echo "Error. No se ha especificado elemento a eliminar.<br>";
    echo "<a href='index.php'>Volver</a>'";
}

function guardar_todo(array $datos)
{
    $file = "juegos.txt";
    $fp = fopen($file, "w");
    if ($fp) {
        for ($i = 0; $i < count($datos); $i++) {
            fputs($fp, "\n" . trim($datos[$i]["titulo"]));
            fputs($fp, "\n" . trim($datos[$i]["anio"]));
            fputs($fp, "\n" . trim($datos[$i]["productora"]));
            fputs($fp, $datos[$i]["descripcion"]);
            fputs($fp, "\n>>> FIN DESCRIPCION <<<");
            fputs($fp, "\n" . trim($datos[$i]["portada"]));
        }
        fclose($fp);
    }
}
