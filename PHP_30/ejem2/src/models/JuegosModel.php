<?php

/**
 * Se encarga de las peticiones sobre la tabla juegos a la BBDD.
 */
class JuegosModel {
    /**
     * Instancion de la conexion con la BBDD.
     * @property MySqlDB $db
     */
    public $db;

    function __construct() {
        $this->db = new MySqlDB();
    }

    function getJuegos() {
        $sql = "SELECT * FROM juegos ORDER BY titulo";
        $juegos = $this->db->query($sql);
        return $juegos;
    }

    /**
     * Devuelve el juego con el id especificado.
     * 
     * @param int $id_juego Id. del juego requerido
     * @return null|array
     * ```
     * [
     *   "titulo" => "",
     *   "productora" => "",
     *   "precio" => "",
     *   "genero" => "",
     *   "plataforma" => ""
     * ]
     * ```
     */
    function getJuego($id_juego) {
        $sql = "SELECT * FROM juegos WHERE id_juego = ?";
        $juegos = $this->db->query($sql, [$id_juego]);
        return empty($juegos) ? null : $juegos[0];
    }

    function crearJuego($datos) {
        $sql = "INSERT INTO juegos 
        (titulo,productora, genero, precio, plataforma) 
        VALUES (?, ?, ?, ?, ?)";
        $params = [
            $datos["titulo"],
            $datos["productora"],
            $datos["genero"],
            $datos["precio"],
            $datos["plataforma"]
        ];
        $ok = $this->db->execute($sql, $params);
        return $ok;
    }

    function updateJuego($id_juego, $datos) {
        $sql = "UPDATE juegos SET titulo = ?, productora = ?, 
        genero = ?, precio = ?, plataforma = ? 
        WHERE id_juego = ?";
        $params = [
            $datos["titulo"],
            $datos["productora"],
            $datos["genero"],
            $datos["precio"],
            $datos["plataforma"],
            $id_juego
        ];
        $ok = $this->db->execute($sql, $params);
        return $ok;
    }

    function deleteJuego($id_juego) {
        $sql = "DELETE FROM juegos WHERE id_juego = ?";
        $ok = $this->db->execute($sql, [$id_juego]);
        return $ok;
    }
}
