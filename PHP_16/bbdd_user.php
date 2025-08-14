<?php

include "bbdd.php";

function saveUsuario (array $datos){
    $usuario=$datos["usuario"];
    $pasword=$datos["password"];
    $email=$datos["email"];

    $sql= "INSERT INTO usuario (nombre_usuario, email, pasword)
    VALUES ('$usuario', '$email', '$pasword')";

    return bbddExecute($sql);
}

function loginUser(array $datos){
    $usuario=$datos["usuario"];
    $pasword=$datos["password"];

    $sql="SELECT * FROM usuario WHERE nombre_usuario = '$usuario'
    AND pasword= '$pasword'";

    $resul = bbddQuery($sql);
    return empty($resul) ? false : $resul[0];
}
