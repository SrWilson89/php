<?php

class LibrosModel {
    function __construct() {
        $this->cnx = new MySqlDB();
    }

    function getLibros() {
        $sql = "SELECT * FROM libros";
        $libros = $this->cnx->query($sql);
        return $this->converAsocToObj($libros);
    }

    function getLibro(int $isbn) {
        $sql = "SELECT * FROM libros WHERE isbn=?";
        $libros = $this->cnx->query($sql, [$isbn]);
        return empty($libros) ? null : new Libro($libros[0]);
    }

    function createLibro(Libro $libro) {
        $sql = "INSERT INTO libros (isbn, titulo, anio_publicacion, editorial, 
        descripcion, imagen) 
        VALUES (?,?,?,?,?,?)";
        $params = [
            $libro->isbn,
            $libro->titulo,
            $libro->anio,
            $libro->editorial,
            $libro->descripcion,
            $libro->imagen
        ];
        $ok = $this->cnx->execute($sql, $params);
        return $ok ? $this->cnx->lastInsertId() : false;
    }

    function updateLibro(Libro $libro) {
        $sql = "UPDATE libros SET isbn = ?, titulo = ?, 
            anio_publicacion = ?, editorial=?, descripcion=?,
            imagen=? WHERE isbn=?";
        $params = [
            $libro->isbn,
            $libro->titulo,
            $libro->anio,
            $libro->editorial,
            $libro->descripcion,
            $libro->imagen,
            $libro->isbn
        ];
        $ok = $this->cnx->execute($sql, $params);
        return $ok;
    }

    function deleteLibro(int $isbn) {
        $sql = "DELETE FROM libros WHERE isbn=?";
        $ok = $this->cnx->execute($sql, [$isbn]);
        return $ok;
    }

    /**
     * Convierte un array de elemtos asociativos a un
     * array de objetos productos.
     */
    function converAsocToObj(array $asocs) {
        $objs = [];
        foreach ($asocs as $asoc) {
            $objs[] = new Libro($asoc);
        }
        return $objs;
    }
}
