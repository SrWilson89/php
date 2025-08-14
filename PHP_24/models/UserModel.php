<?php
class UserModel {

    function __construct() {
        $this->db = ConexionDB::conectar();
    }

    function recuperarUsuario(string $apodo) {
        $result = null;
        try {
            $sql = "SELECT * FROM usuarios WHERE apodo='$apodo'";
            $client = $this->db->query($sql);
            $user = $client->fetchAll(PDO::FETCH_ASSOC);
            // var_dump($user);
            if (count($user) > 0) {
                return $this->assocToUser($user[0]);
            }
            return null;
        } catch(PDOException $e) {
            throw new Exception("No se ha podido conectar con la base de datos", 1);
        } finally  {
            $conexion = null;
        }
        return $result;
    }

    function assocToUser($assoc) {
        $user = new User(
            $assoc["id_user"], 
            $assoc["apodo"],
            $assoc["password"],
            $assoc["rol"]);
        return $user;
    }
}