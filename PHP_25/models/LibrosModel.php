<?php


class LibrosModel {

    function __construct() {
        $this->cnx = new MysqlDB();
    }
    function getLibros() {
        $sql = "SELECT * FROM libros";
        $libros = $this->cnx->query($sql);
        return $libros;
    }

    function getLibro($id_libro) {
        $sql = "SELECT * FROM libros WHERE id_libro=?";
        $libros = $this->cnx->query($sql, [$id_libro]);
        return empty($libros) ? null : $libros[0];
    }

    function createLibro(array $libro) {
        $sql = "INSERT INTO libros (titulo, anio_publicacion, 
        editorial, descripcion) VALUES (?,?,?,?)";
        $params = [
            $libro["titulo"],
            $libro["anio_publicacion"],
            $libro["editorial"],
            $libro["descripcion"]
        ];
        $ok = $this->cnx->execute($sql, $params);
        return $ok;
    }

    function updateLibro($id_libro, array $libro) {
        $sql = "UPDATE libros 
                SET titulo = ?, anio_publicacion = ?, 
                editorial = ?, descripcion = ? 
                WHERE id_libro = ?";
        $params = [
            $libro["titulo"],
            $libro["anio_publicacion"],
            $libro["editorial"],
            $libro["descripcion"],
            $id_libro
        ];
        $ok = $this->cnx->execute($sql, $params);
        return $ok;
    }

    function deleteLibro($id_libro) {
        $sql = "DELETE FROM libros WHERE id_libro=?";
        $ok = $this->cnx->execute($sql, [$id_libro]);
        return $ok;
    }
}
