<?php

class ProductosModel {
    private $lista;

    function __construct() {
        $this->lista = [
            [
                "nombre" => "Producto 1",
                "stock" => 2,
                "descripcion" => "Descripcion del producto 1"
            ],
            [
                "nombre" => "Producto 2",
                "stock" => 4,
                "descripcion" => "Descripcion del producto 2"
            ],
            [
                "nombre" => "Producto 3",
                "stock" => 5,
                "descripcion" => "Descripcion del producto 3"
            ],
            [
                "nombre" => "Producto 4",
                "stock" => 12,
                "descripcion" => "Descripcion del producto 4"
            ],
        ];
    }
    function getProductos() {
        return $this->lista;
    }

    function addProducto(array $datos) {
        $this->lista[] = [
            "nombre" => $datos["nombre"],
            "stock" => $datos["stock"],
            "descripcion" => $datos["descripcion"]
        ];
        return true;
    }
}
