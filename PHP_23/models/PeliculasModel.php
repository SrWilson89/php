<?php

class PeliculasModel {
    function __construct() {
        $this->cnx = new MySqlDB();
    }

    function getPeliculas() {
        $sql = "SELECT * FROM peliculas";
        $peliculas = $this->cnx->query($sql);
        return $this->converAsocToObj($peliculas);
    }

    function getPelicula(int $id_pelicula) {
        $sql = "SELECT * FROM peliculas WHERE id_pelicula =?";
        $peliculas = $this->cnx->query($sql, [$id_pelicula]);
        return empty($peliculas) ? null : new Pelicula($peliculas[0]);
    }

    function createPelicula(Pelicula $pelicula) {
        $sql = "INSERT INTO peliculas (titulo, duracion, anio, 
        pais, genero, sipnosis, imagen) 
        VALUES (?,?,?,?,?,?,?)";
        $params = [
            $pelicula->titulo,
            $pelicula->duracion,
            $pelicula->anio,
            $pelicula->pais,
            $pelicula->genero,
            $pelicula->sipnosis,
            $pelicula->imagen
        ];
        $ok = $this->cnx->execute($sql, $params);
        return $ok ? $this->cnx->lastInsertId() : false;
    }

    function updatePelicula(Pelicula $pelicula) {
        $sql = "UPDATE peliculas SET titulo=?, duracion=?, anio=?, 
        pais=?, genero=?, sipnosis=?, imagen=? WHERE id_pelicula=?";
        $params = [
            $pelicula->titulo,
            $pelicula->duracion,
            $pelicula->anio,
            $pelicula->pais,
            $pelicula->genero,
            $pelicula->sipnosis,
            $pelicula->imagen
        ];
        $ok = $this->cnx->execute($sql, $params);
        return $ok;
    }

    function deletePelicula(int $id_pelicula) {
        $sql = "DELETE FROM peliculas WHERE id_pelicula=?";
        $ok = $this->cnx->execute($sql, [$id_pelicula]);
        return $ok;
    }

    /**
     * Convierte un array de elemtos asociativos a un
     * array de objetos productos.
     */
    function converAsocToObj(array $asocs) {
        $objs = [];
        foreach ($asocs as $asoc) {
            $objs[] = new Pelicula($asoc);
        }
        return $objs;
    }
}
