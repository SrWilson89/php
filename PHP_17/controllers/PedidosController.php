<?php

class PedidosController {

    function __construct() {
        $this->model = new PedidosModel();
    }

    function index() {
        if (!isset($_SESSION["autenticado"])) {
            header("location: " . Config::URL_BASE);
        }
        if ($_SESSION["rol"] === "administrador") {
            $pedidos = $this->model->getPedidosPendientes();
        } else if ($_SESSION["rol"] === "cliente") {
            $pedidos = $this->model->getPedidosPendientesByIdUsuario($_SESSION["id"]);
        } else {
            header("location: " . Config::URL_BASE);
        }
        $vista = new View();
        $vista->pedidos = $pedidos;
        $vista->render("pedidos");
    }
}
