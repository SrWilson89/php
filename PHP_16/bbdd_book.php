<?php

function getFilm(int $id_libro){
    $cnn= new PDO('mysql:host=localhost;dbname=biblioteca;port=3306', 'root');
    $sql= "SELECT * FROM libros WHERE id_libro = $id_libro";
    $resul= $cnn->query($sql);
    $data =$resul->fetchAll(PDO::FETCH_ASSOC);
    $cnn=null;
    return count($data) >=0 ? $data[0] :null;
}

function getFilms(){
    $cnn= new PDO('mysql:host=localhost;dbname=biblioteca;port=3306', 'root');
    $resul = $cnn->query('SELECT * FROM libros');
    $data = $resul->fetchAll(PDO::FETCH_ASSOC);
    $cnn=null;
    return $data;
}

function guardarLibro (array $datos){
    $tit=$datos["titulo"];
    $anio=$datos["anio"];
    $edit=$datos["editorial"];
    $desc=$datos["descripcion"];
    $cnn= new PDO('mysql:host=localhost;dbname=biblioteca;port=3306', 'root');
    $sql= "INSERT INTO libros (titulo, anio, editorial, descripción)
    VALUES ('$tit', '$anio', '$edit', '$desc')";
    return $cnn->exec($sql);
}

function film_update(int $id_libro, array $data){
    $tit=$data["titulo"];
    $anio=$data["anio"];
    $edit=$data["editorial"];
    $desc=$data["descripcion"];

    $cnn= new PDO('mysql:host=localhost;dbname=biblioteca;port=3306', 'root');
    $sql= "UPDATE libros
            SET
                titulo='$tit',
                anio='$anio',
                editorial='$edit',
                descripción='$desc'
            WHERE id_libro=$id_libro";
    return $cnn->exec($sql);
}

function deleteFilm(int $id_libro){
    $cnn= new PDO('mysql:host=localhost;dbname=biblioteca;port=3306', 'root');
    $sql= "DELETE FROM libros WHERE id_libro=$id_libro";
    return $cnn->exec($sql);
}

function bbddExecute(String $sql){
    $cnn= new PDO('mysql:host=localhost;dbname=biblioteca;port=3306', 'root');
    return $cnn->exec($sql);
}