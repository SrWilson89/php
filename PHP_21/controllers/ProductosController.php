<?php

class ProductosController {

    function index() {
        $model = new ProductosModel();
        $productos = $model->getProductos();
        $vista = new View();
        $vista->productos = $productos;
        $vista->render("productos_lista");
    }
    function nuevo() {
        include "views/producto_nuevo_view.php";
    }

    function editar($id) {
        // El archivo de vista puede acceder s los atributos
        // ($this) de la clase que la incluye.
        $vista = new View();
        // Creamos en el objeto vista el atributo id.
        $vista->id = $id;
        $vista->render("producto_editar");
    }
}
