<?php

    function validarForm(array $data)
    {
        $errores = [];

        $titulo = $data["titulo"];
        if ($titulo === "") {
            $errores["titulo"] = "Escribe tu titulo";
        }

        $anio = $data["lanzamiento"];    
        if($anio !==""){
            if (!is_numeric($anio)) {
                $errores["lanzamiento"] = "Debes escribir un año";
            }elseif($anio<1950){
                $errores["lanzamiento"] = "El año parece incorrecto";
            }
        }

        return empty($errores) ? true : $errores ; //importante que te cagas

    }

?>