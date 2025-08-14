<?php

class EquiposModel {

    function __construct() {
        $this->db = new MySqlDB();
    }

    function getEquipos() {
        $sql = "SELECT * FROM equipos_de_futbol ORDER BY id_equipo";
        $equipos = $this->db->query($sql);
        return $equipos;
    }

    function getEquipo($id_equipo) {
        $sql = "SELECT * FROM equipos_de_futbol WHERE id_equipo = ?";
        $equipos = $this->db->query($sql, [$id_equipo]);
        return empty($equipos) ? null : $equipos[0];
    }

    function crearEquipo($datos) {
        $sql = "INSERT INTO equipos_de_futbol 
        (titulo,productora, genero, precio, plataforma) 
        VALUES (?, ?, ?, ?, ?)";
        $params = [
            $datos["nombre_equipo"],
            $datos["ciudad"],
            $datos["numero_jugadores"],
            $datos["nombre_estadio"],
            $datos["division"]
        ];
        $ok = $this->db->execute($sql, $params);
        return $ok;
    }

    function updateEquipo($id_equipo, $datos) {
        $sql = "UPDATE equipos_de_futbol SET titulo = ?, productora = ?, 
        genero = ?, precio = ?, plataforma = ? 
        WHERE id_equipo = ?";
        $params = [
            $datos["nombre_equipo"],
            $datos["ciudad"],
            $datos["numero_jugadores"],
            $datos["nombre_estadio"],
            $datos["division"],
            $id_equipo
        ];
        $ok = $this->db->execute($sql, $params);
        return $ok;
    }

    function deleteEquipo($id_equipo) {
        $sql = "DELETE FROM equipos_de_futbol WHERE id_equipo = ?";
        $ok = $this->db->execute($sql, [$id_equipo]);
        return $ok;
    }

    function equipoDivision($division){
        $sql = "SELECT * FROM equipos_de_futbol WHERE division = ?";
        $equipos = $this->db->query($sql, [$division]);
        return empty($equipos) ?null : $equipos[0];
    }

    // function getEquipo($id_equipo) {
    //     $sql = "SELECT * FROM equipos_de_futbol WHERE id_equipo = ?";
    //     $equipos = $this->db->query($sql, [$id_equipo]);
    //     return empty($equipos) ? null : $equipos[0];
    // }

    function equipoCiudad($ciudad){
        $sql = "SELECT * FROM equipos_de_futbol WHERE ciudad = ?";
        $equipos = $this->cnx->query($sql, [$ciudad]);
        return empty($equipos) ?null : $equipos;
    }

    function jugadoresTotal($division){
        $sql = "SELECT SUM(numero_jugadores) FROM equipos_de_futbol WHERE division = ?";
        $jugadores = $this->cnx->query($sql, [$division]);
        return empty($jugadores) ?null : $jugadores;
    }
}
