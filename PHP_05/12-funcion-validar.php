<?php

function validaFormulario(array $data)
{
    $errores = [];
    $nombre = $data["nombre"];
    if ($nombre === "") {
        $errores["nombre"] = "Falta el nombre";
    }
    $apellidos = $data["apellidos"];
    if ($apellidos === "") {
        $errores["apellidos"] = "Faltan los apellidos";
    }

    $codigoPostal = $data["codigoPostal"];
    if (!is_numeric($codigoPostal)) {
        $errores["codigoPostal"] = "Solo se permiten números.";
    } else if (strlen($codigoPostal) !== 5) {
        $errores["codigoPostal"] = "Solo 5 dígitos";
    }

    $edad = $data["edad"];
    if (!is_numeric($edad)) {
        $errores["edad"] = "Escribe un número, por favor.";
    } else if ($edad <= 1 || $edad > 100) {
        $errores["edad"] = "Revisa la edad.";
    }
    return count($errores) === 0 ? true : $errores;
}
