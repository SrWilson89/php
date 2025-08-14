<?php

class UsuariosModel {

    function __construct() {
        $this->cnx = new MySqlDB();
    }

    function crearUsuario($user) {
        $sql = "INSERT INTO usuarios 
            (nombre_usuario, email, password) 
            VALUES (?,?,?)";
        $params = [
            $user["nombre_usuario"],
            $user["email"],
            $user["password"]
        ];
        $ok = $this->cnx->execute($sql, $params);
        return $ok;
    }

    function getUsuarioByEmail(string $email) {
        $sql = "SELECT * FROM usuarios WHERE email=?";
        $user = $this->cnx->query($sql, [$email]);
        return empty($user) ? null : $user[0];
    }
}
