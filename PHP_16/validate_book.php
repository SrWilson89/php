<?php

function validarForm (array $data){
    $errores = [];

    $titulo = $data["titulo"];
    if ($titulo === "") {
        $errores["titulo"] = "Escribe un titulo";
    }

    $anio = $data["anio"];
    if ($anio === "") {
        $errores["anio"] = "Escribe un año";
    }

    if ($anio <=1600 && $anio >=2022) {
        $errores["anio"] = "Revisa la fecha";
    }

    $editorial = $data["editorial"];
    if ($editorial === "") {
        $errores["editorial"] = "Escribe una editorial";
    }

    $descripcion = $data["descripcion"];
    if ($descripcion === "") {
        $errores["descripcion"] = "Escribe una descripcion";
    }

    return count($errores) > 0 ? $errores : true;
}