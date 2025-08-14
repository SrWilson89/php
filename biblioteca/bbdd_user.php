<?php
include_once "bbdd.php";

function setUserToPartner(int $id_user)
{
    $sql = "UPDATE usuarios SET rol = 'socio' WHERE id_usuario=$id_user";
    return bbddExecute($sql);
}
function getUserById(int $id_user)
{
    $sql = "SELECT * FROM usuarios 
            WHERE id_usuario = $id_user";
    $resul = bbddQuery($sql);
    return empty($resul) ? null : $resul[0];
}

function loginUser(array $data)
{
    $usr = $data["usuario"];
    $pass = $data["password"];
    $sql = "SELECT * FROM usuarios 
            WHERE nombre_usuario = '$usr' AND password='$pass'";
    $resul = bbddQuery($sql);
    return empty($resul) ? false : $resul[0];
}

function saveUser(array $data)
{
    $usr = $data["usuario"];
    $pass = $data["password"];
    $email = $data["email"];

    $sql = "INSERT INTO usuarios (nombre_usuario, password, email) 
            VALUES ('$usr', '$pass', '$email')";
    return bbddExecute($sql);
}
