<?php


class EquiposModel {

    function __construct() {
        $this->cnx = new MysqlDB();
    }
    function getEquipos() {
        $sql = "SELECT * FROM equipos_de_futbol";
        $equipos = $this->cnx->query($sql);
        return $equipos;
    }

    function getEquipo($id_equipo) {
        $sql = "SELECT * FROM equipos_de_futbol WHERE id_equipo=?";
        $equipo = $this->cnx->query($sql, [$id_equipo]);
        return empty($equipo) ? null : $equipo[0];
    }

    function createEquipo(array $equipo) {
        $sql = "INSERT INTO equipos_de_futbol (nombre_equipo,ciudad, 
        numeroJugadores, nombre_estadio,division) VALUES (?,?,?,?,?)";
        $params = [
            $equipo["nombre_equipo"],
            $equipo["ciudad"],
            $equipo["numeroJugadores"],
            $equipo["nombre_estadio"],
            $equipo["division"]
            
        ];
        $ok = $this->cnx->execute($sql, $params);
        return $ok;
    }

    function updateEquipo($id_equipo, array $equipo) {
        $sql = "UPDATE equipos_de_futbol 
                SET nombre_equipo = ?, ciudad = ?, 
                numeroJugadores = ?, nombre_estadio = ? , division = ?
                WHERE id_equipo = ?";
        $params = [
            $equipo["nombre_equipo"],
            $equipo["ciudad"],
            $equipo["numeroJugadores"],
            $equipo["nombre_estadio"],
            $equipo["division"],
            $id_equipo
        ];
        $ok = $this->cnx->execute($sql, $params);
        return $ok;
    }

    function deleteEquipo($id_equipo) {
        $sql = "DELETE FROM equipos_de_futbol WHERE id_equipo=?";
        $ok = $this->cnx->execute($sql, [$id_equipo]);
        return $ok;
    }


    function equipoDivision($division){

        $sql = "SELECT * FROM equipos_de_futbol WHERE division=?";
        $equipos = $this->cnx->query($sql, [$division]);
        return empty($equipos) ? null : $equipos;
    }





    function equipoCiudad($ciudad){

        $sql = "SELECT * FROM equipos_de_futbol WHERE ciudad=?";
        $equipos = $this->cnx->query($sql, [$ciudad]);
        return empty($equipos) ? null : $equipos;
    }

    function jugadoresTotal($division){

        $sql = "SELECT SUM(numeroJugadores) FROM equipos_de_futbol WHERE division=?";
        $jugadores = $this->cnx->query($sql, [$division]);
        return $jugadores;
    }




}
