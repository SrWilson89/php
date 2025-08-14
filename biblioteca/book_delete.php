<?php
include "bbdd_book.php";
include "func_sesion.php";
session_start();

if (!isAdmin()) {
    header('location: index.php');
}

if (isset($_GET["id"])) {
    $id = $_GET["id"];
    try {
        $good = deleteBook($id);
        if ($good) {
            header("location: index.php");
        } else {
            echo "No se ha podido eliminar el libro. Inténtalo más tarde.";
        }
    } catch (Exception $e) {
        if ($e->getCode() == 23000) {
            echo "El libro no se puede eliminar. Ya ha sido prestado.";
        } else {
            echo "Exception: " . $e->getMessage();
        };
    }
} else {
    header("location: index.php");
}
