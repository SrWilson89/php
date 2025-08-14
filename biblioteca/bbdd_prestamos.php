<?php
include_once "bbdd.php";

function estaPrestado(int $id_libro)
{
    $sql = "SELECT id_libro FROM prestamos 
            WHERE id_libro=$id_libro";
    $data = bbddQuery($sql);
    return !empty($data);
}

function crearPrestamo(int $id_libro, int $id_socio, string $fechaInicio)
{
    $sql = "INSERT INTO prestamos (id_libro, id_socio, fecha_inicio) 
            VALUES ($id_libro, $id_socio, '$fechaInicio')";

    return bbddExecute($sql);
}
