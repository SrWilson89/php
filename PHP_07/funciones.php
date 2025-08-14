<?php

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

        $alergias = $data["alergias"];
        if ($alergias === "") {
            $errores["alergias"] = "Escribe NO si no tiene o desconoces sus alergias";
        }

        $perros = $data["perros"];
        if (!is_numeric($perros)) {
            $errores["perros"] = "Escribe un numero";
        } elseif ($perros < 0 || $perros > 50) {
            $errores["perros"] = "Revisa el numero de perros";
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
            $errores["color"] = "Ese color no es natural";
        }


        if (!isset($data["pienso"])) {
            $errores["pienso"] = "Elija almenos una comida";
        }

        return count($errores) > 0 ? $errores : true;
    }

    function estePienso($pienso, array $data){
        $x = 0;
        $encontrado = false;
        while ($x < count($data) && !$encontrado) {
            if ($data[$x] === $pienso) {
                $encontrado = true;
            }
            $x++;
        }
        return $encontrado;
    }

?>