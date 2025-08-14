<?php

function leer_videojuegos()
{
    $juegos = [];
    $file = "juegos.txt";
    if (file_exists($file)) {
        $fp = fopen($file, "r");
        if ($fp) {
            fgets($fp); // salta linea en blanco
            while (!feof($fp)) {
                $game = [];
                $game["titulo"] = fgets($fp);
                $game["anio"] = fgets($fp);
                $game["productora"] = fgets($fp);
                $fila = fgets($fp); // descripcion
                $game["descripcion"] = "";
                while ($fila !== ">>> FIN DESCRIPCION <<<\n") {
                    $game["descripcion"] .= $fila;
                    $fila = fgets($fp);
                }
                $game["portada"] = fgets($fp);
                $juegos[] = $game;
            }
            fclose($fp);
        }
    }
    return $juegos;
}
