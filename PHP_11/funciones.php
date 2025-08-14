<?php

function validarForm(array $data)
    {
        $errores = [];

        if(isset($data["tratamiento"])){
            $trata=$data["tratamiento"];
            if($trata ===""){
                $errores["tratamiento"] = "Escoja una opcion";
            }
        }

        $nombre = $data["nombre"];
        if ($nombre === "") {
            $errores["nombre"] = "Escribe tu nombre";
        }

        $apellidos = $data["apellidos"];
        if ($apellidos === "") {
            $errores["apellidos"] = "Escribe tu apellido";
        }

        return count($errores) > 0 ? $errores : true;
    }

function estaOferta($ofertas, array $data){
        $x = 0;
        $encontrado = false;
        while ($x < count($data) && !$encontrado) {
            if ($data[$x] === $ofertas) {
                $encontrado = true;
            }
            $x++;
        }
        return $encontrado;
    }