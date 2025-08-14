<?php

use Firebase\JWT\JWT;

class LibrosController {

    function __construct() {
        $this->model = new LibrosModel();
    }
    function index() {
        $libros = $this->model->getLibros();
        echo json_encode($libros);
    }

    function getLibro(array $params) {
        $id_libro = $params["id"];

        $libro = $this->model->getLibro($id_libro);
        if (!is_null($libro)) {
            $res = [
                "data" => $libro,
                "status" => 200,
                "ok" => true,
                "message" => "Libro encontrado."
            ];
        } else {
            $res = [
                "status" => 404,
                "ok" => true,
                "message" => "Libro no encontrado."
            ];
        }
        http_response_code($res["status"]);
        echo json_encode($res);
    }

    function nuevo() {
        AdministradorAcceso::verificar();

        $postlibro = file_get_contents("php://input");
        $libro = json_decode($postlibro, true);

        $ok = $this->model->createLibro($libro);
        if ($ok) {
            $res = [
                "status" => 200,
                "ok" => true,
                "message" => "El libro se ha creado satisfactoriamente."
            ];
        } else {
            $res = [
                "status" => 500,
                "ok" => true,
                "message" => "El libro no se ha podido crear."
            ];
        }
        http_response_code($res["status"]);
        echo json_encode($res);
    }

    function update(array $params) {
        AdministradorAcceso::verificar();

        $id_libro = $params["id"];
        $postlibro = file_get_contents("php://input");
        $libro = json_decode($postlibro, true);
        $ok = $this->model->updateLibro($id_libro, $libro);
        if ($ok) {
            $res = [
                "status" => 200,
                "ok" => true,
                "message" => "El libro se ha actualizado satisfactoriamente."
            ];
        } else {
            $res = [
                "status" => 500,
                "ok" => true,
                "message" => "El libro no se ha podido actualizar."
            ];
        }
        http_response_code($res["status"]);
        echo json_encode($res);
    }


    function delete(array $params) {
        AdministradorAcceso::verificar();

        $id_libro = $params["id"];
        $ok = $this->model->deleteLibro($id_libro);
        if ($ok) {
            $res = [
                "status" => 200,
                "ok" => true,
                "message" => "El libro se ha eliminado satisfactoriamente."
            ];
        } else {
            $res = [
                "status" => 500,
                "ok" => true,
                "message" => "El libro no se ha podido eliminar."
            ];
        }
        http_response_code($res["status"]);
        echo json_encode($res);
    }
}
