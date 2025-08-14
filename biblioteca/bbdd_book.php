<?php
include_once "bbdd.php";

function getLibrosPrestados(int $id_user)
{
    $sql = "SELECT * FROM libros 
            WHERE id_libro 
                IN (SELECT id_libro FROM prestamos 
                    WHERE id_socio 
                    IN (SELECT id_socio FROM socios 
                        WHERE Id_usuario=$id_user))";
    return bbddQuery($sql);
}

function getBooks()
{
    $sql = 'SELECT * FROM libros';
    $data = bbddQuery($sql);
    return $data;
}

function getBook(int $id_libro)
{

    $sql = "SELECT * FROM libros WHERE id_libro = $id_libro";
    $data = bbddQuery($sql);
    return count($data) > 0 ? $data[0] : null;
}



function saveBook(array $data)
{
    $tit = $data["titulo"];
    $anio = $data["anio"];
    $edit = $data["editorial"];
    $desc = $data["descripcion"];

    $sql = "INSERT INTO libros (titulo, anio_publicacion, 
    editorial, descripcion) VALUES ('$tit', $anio, '$edit', '$desc')";
    return bbddExecute($sql);
}

function updateBook(int $id_libro, array $data)
{
    $tit = $data["titulo"];
    $anio = $data["anio"];
    $edit = $data["editorial"];
    $desc = $data["descripcion"];
    $sql = "UPDATE libros 
            SET titulo='$tit', 
                anio_publicacion=$anio, 
                editorial='$edit', 
                descripcion='$desc' 
            WHERE id_libro=$id_libro";
    return bbddExecute($sql);
}

function deleteBook(int $id_libro)
{
    $sql = "DELETE FROM libros WHERE id_libro=$id_libro";
    return bbddExecute($sql);
}
