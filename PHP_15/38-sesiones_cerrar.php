<?php
    session_start();
    if (!(isset($_SESSION) && $_SESSION["autenticado"])) {
        header("Location: 37-sesiones.php");
    }
    session_destroy();
    header("Location: 37-sesiones.php");
?>