<?php
include "controllers/HomeController.php";
include "controllers/QuienEresController.php";
include "controllers/ContactoController.php";
include "controllers/ErroresController.php";
include "controllers/ProductosController.php";
include "libs/View.php";
/**
 * Primero crear controlador para iniciar
 * El controlador decide que debe hacer.
 */
echo "URL: " . $_GET["url"];
// Compruebo si existe la key url.
if (isset($_GET["url"])) {
    // conrpuebo si url es "quieneres"
    if ($_GET["url"] === "quieneres") {
        $quien = new QuienEresController();
        $quien->index();
    } else if ($_GET["url"] === "contacto") {
        $contacto = new ContactoController();
        $contacto->index();
    } else if ($_GET["url"] === "productos") {
        $producto = new ProductosController();
        $producto->index();
    } else if ($_GET["url"] === "productos/nuevo") {
        $producto = new ProductosController();
        $producto->nuevo();
    } else if ($_GET["url"] === "productos/editar/1") {
        $producto = new ProductosController();
        $producto->editar(1);
    } else {
        $errores = new ErroresController();
        $errores->index();
    }
} else {
    $home = new HomeController();
    $home->index();
}
