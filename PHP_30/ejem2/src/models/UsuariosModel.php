<?php

class UsuariosModel {

    function __construct() {
        $this->db = new MySqlDB();
    }

    function crearUsuario($datos) {
        $sql = "INSERT INTO usuarios 
        (nombre_usuario, email, password) 
        VALUES (?, ?, ?)";
        $params = [
            $datos["nombre_usuario"],
            $datos["email"],
            $datos["password"]
        ];
        $ok = $this->db->execute($sql, $params);
        return $ok;
    }

    function getUsuarioByEmail($email) {
        $sql = "SELECT * FROM usuarios WHERE email = ?";
        $users = $this->db->query($sql, [$email]);
        return empty($users) ? null : $users[0];
    }
}
