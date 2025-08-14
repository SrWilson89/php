<?php

function existeColor(string $color, array $array_colores)
    {
        for ($x = 0; $x < count($array_colores); $x++) {
            if ($array_colores[$x] === $color) {
                return true;
            }
        }
        return false;
    }

    function existeColor2(string $color, array $array_colores)
    {
        $x = 0;
        $encontrado = false;
        while ($x < count($array_colores) && !$encontrado) {
            if ($array_colores[$x] === $color) {
                $encontrado = true;
            }
            $x++;
        }
        return $encontrado;
    }

    function validarForm(array $data, array $colores)
    {
        $errores = [];
        $nombre = $data["nombre"];
        if ($nombre === "") {
            $errores["nombre"] = "Escribe tu nombre";
        }

        $hermanos = $data["hermanos"];
        if (!is_numeric($hermanos)) {
            $errores["hermanos"] = "Escribe un numero";
        } elseif ($hermanos < 0 || $hermanos > 25) {
            $errores["hermanos"] = "Revisa el numero de hermanos";
        }

        $nacimiento = $data["nacimiento"];
        if ($nacimiento !== "") {
            $yr = substr($nacimiento, 0, 4);
            $mes = substr($nacimiento, 5, 2);
            $dia = substr($nacimiento, 8, 2);
            if (!checkdate(intval($mes), intval($dia), intval($yr))) {
                $errores["nacimiento"] = "Revisa la fecha";
            }
        } else {
            $errores["nacimiento"] = "Introduce la fecha";
        }

        $color = $data["color"];
        if ($color == "") {
            $errores["color"] = "Elige un color";
        } else if (!existeColor2($color, $colores)) {
            $errores["color"] = "Ese color no esta disponible";
        }


        if (!isset($data["aficion"])) {
            $errores["aficion"] = "Elija almenos una aficion";
        }

        if (!isset($data["fruta"])) {
            $errores["fruta"] = "Elija almenos una fruta";
        }

        return count($errores) > 0 ? $errores : true;
    }

    function estaAficion($aficion, array $data){
        $x = 0;
        $encontrado = false;
        while ($x < count($data) && !$encontrado) {
            if ($data[$x] === $aficion) {
                $encontrado = true;
            }
            $x++;
        }
        return $encontrado;
    }

    ?>