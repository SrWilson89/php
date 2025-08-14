<?php

class ProductosController {

    function index() {
        include "views/productos_lista_view.php";
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
