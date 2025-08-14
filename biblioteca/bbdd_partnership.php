<?php
include_once "bbdd.php";

function getSocioByIdUser(int $id_user)
{
    $sql = "SELECT * FROM socios WHERE id_usuario=$id_user";
    $data = bbddQuery($sql);
    return empty($data) ? false : $data[0];
}

function saveSocio(int $id_user, array $data)
{
    $nom = $data["nombre"];
    $ape = $data["apellidos"];
    $sql = "INSERT INTO socios (nombre, apellidos, id_usuario) 
            VALUES('$nom', '$ape', $id_user)";
    $ok = bbddExecute($sql);
    if ($ok === true) {
        $ok = setUserToPartner($id_user);
        if ($ok === false) {
            deleteSocioByIdUser($id_user);
        }
    }

    return $ok;
}

function deleteSocioByIdUser(int $id_user)
{
    $sql = "DELETE FROM socios WHERE id_usuario = $id_user";
    return bbddExecute($sql);
}
