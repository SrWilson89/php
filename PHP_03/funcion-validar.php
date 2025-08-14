<?php

function validarFormulario(Array $data){

    $errores=[];

    $nombre=$data["nombre"];

    if($nombre ===""){
        $errores["nombre"]="Falta un nombre";
    }

    $apellidos=$data["apellidos"];
    if($apellidos ===""){
        $errores["apellidos"]="Falta un apellido";
    }

    $postal=$data["cp"];
    if(!is_numeric($postal)){
        $errores["cp"]="Solo se permiten numeros";
    }elseif(strlen($postal)!==5){
        $errores["cp"]="Solo se permiten 5 digitos";
    }

    $edad=$data["edad"];
    if(!is_numeric($edad)){
        $errores["edad"]="Escribe un numero";
    }elseif($edad <=1 || $edad >=120){
        $errores["edad"]="Revisa la edad";
    }

    return count($errores) === 0 ? true :$errores;
}

?>