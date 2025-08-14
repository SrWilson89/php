<?php

function validarForm(array $data, array $colores)
{
    $errores = [];
    $nombre = $data["nombre"];
    if ($nombre === "") {
        $errores["nombre"] = "Escribe tu nombre.";
    }

    $hermanos = $data["hermanos"];
    if (!is_numeric($hermanos)) {
        $errores["hermanos"] = "Solo se permiten números.";
    } else if ($hermanos < 0 || $hermanos > 25) {
        $errores["hermanos"] = "Dato improbable. Revísalo.";
    }

    $fecha = $data["fecha"];
    if ($fecha !== "") {
        $anio = intval(substr($fecha, 0, 4));
        $mes = intval(substr($fecha, 5, 2));
        $dia = intval(substr($fecha, 8, 2));
        if (!checkdate($mes, $dia, $anio)) {
            $errores["fecha"] = "Fecha incorrecta.";
        }
    }

    $color = $data["color"];
    if ($color === "") {
        $errores["color"] = "Debes seleccionar un color.";
    } else if (!existeColor2($color, $colores)) {
        $errores["color"] = "El color indicado no está permitido.";
    }

    if (!isset($data["aficion"])) {
        $errores["aficion"] = "Elige al menos una.";
    }

    if (!isset($data["frutas"])) {
        $errores["frutas"] = "Elige una opción.";
    }

    // return !empty($errores) ? $errores : true;
    if (!empty($errores)) {
        return $errores;
    } else {
        return true;
    }
}

function existeColor(string $color, array $array_colores)
{
    for ($i = 0; $i < count($array_colores); $i++) {
        if ($array_colores[$i] === $color) {
            return true;
        }
    }
    return false;
}

function existeColor2(string $color, array $array_colores)
{
    $i = 0;
    $encontrado = false;
    while ($i < count($array_colores) && !$encontrado) {
        if ($array_colores[$i] === $color) {
            $encontrado =  true;
        }
        $i++;
    }
    return $encontrado;
}

function estaAficion($aficion, array $data)
{
    $i = 0;
    $encontrado = false;
    while ($i < count($data) && !$encontrado) {
        if ($data[$i] === $aficion) {
            $encontrado =  true;
        }
        $i++;
    }
    return $encontrado;
}
