<?php
include_once "bbdd_partnership.php";
include_once "func_sesion.php";
include_once "bbdd_prestamos.php";

session_start();

if (!isPartner()) {
    header('location: index.php');
}

if (isset($_GET["id"])) {
    $id_libro = $_GET["id"];
    $id_user = $_SESSION["id"];
    $socio = getSocioByIdUser($id_user);
    if ($socio !== false) {
        $date = getdate();
        $fecha = $date["year"] . '-' . $date["mon"] . '-' . $date["mday"];
        $ok = crearPrestamo($id_libro, $socio["id_socio"], $fecha);
        header("location: user_info.php");
    }
} else {
    header('location: index.php');
}
