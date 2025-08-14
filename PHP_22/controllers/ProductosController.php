<?php

class ProductosController {

    function __construct() {
        $this->model = new ProductosModel();
    }
    function index() {

        $productos = $this->model->getProductos();
        $vista = new View();
        $vista->productos = $productos;
        $vista->render("productos");
    }

    function nuevo() {

        if (isset($_POST["enviar"])) {
            $this->model->addProducto($_POST);
            $destino = "http://localhost/PHP/PHP_22/productos";
            header("location: $destino");
        }
        $vista = new View();
        $vista->render("productos_nuevo");
    }
}
