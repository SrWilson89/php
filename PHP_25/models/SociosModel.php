<?php

class SociosModel {

    function __construct() {
        $this->cnx = new MySqlDB();
    }

    function getSocios() {
        $sql = "SELECT * FROM socios";
        $socios = $this->cnx->query($sql);
        return $socios;
    }

    function getSocio($id_socio) {
        $sql = "SELECT * FROM socios WHERE id_socio=?";
        $socios = $this->cnx->query($sql, [$id_socio]);
        return empty($socios) ? null : $socios[0];
    }

    function createSocio(array $socio) {
        $sql = "INSERT INTO socios (nombre, apellidos, 
        fecha_alta) VALUES (?,?,?)";
        $params = [
            $socio["nombre"],
            $socio["apellidos"],
            $socio["fecha_alta"]
        ];
        $ok = $this->cnx->execute($sql, $params);
        return $ok;
    }

    function updateSocio($id_socio, array $socio) {
        $sql = "UPDATE socios 
                SET nombre = ?, apellidos = ?, 
                fecha_alta = ?  
                WHERE id_socio = ?";
        $params = [
            $socio["nombre"],
            $socio["apellidos"],
            $socio["fecha_alta"],
            $id_socio
        ];
        $ok = $this->cnx->execute($sql, $params);
        return $ok;
    }

    function deleteSocio($id_socio) {
        $sql = "DELETE FROM socios WHERE id_socio=?";
        $ok = $this->cnx->execute($sql, [$id_socio]);
        return $ok;
    }
}
