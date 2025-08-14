<?php

class EquiposController {
    function __construct() {
        $this->model = new EquiposModel();
    }

    function index() {
        $equipos = $this->model->getEquipos();
        $res = [
            "data" => $equipos,
            "status" => 200,
            "ok" => true,
            "message" => "Listado de equipos disponibles"
        ];
        echo json_encode($res);
    }

    function getEquipo($params) {
        $id_equipo = $params["idEquipo"];
        $equipo = $this->model->getEquipo($id_equipo);
        if (is_null($equipo)) {
            $res = [
                "status" => 404,
                "ok" => true,
                "message" => "Equipo no encontrado."
            ];
        } else {
            $res = [
                "data" => $equipo,
                "status" => 200,
                "ok" => true,
                "message" => "Equipo encontrado satisfactoriamente."
            ];
        }
        http_response_code($res["status"]);
        echo json_encode($res);
    }

    function create() {
        AdministradorAcceso::verificar();

        $post = file_get_contents("php://input");
        $data = json_decode($post, true);
        $ok = $this->model->crearEquipo($data);
        if ($ok) {
            $res = [
                "status" => 201,
                "ok" => true,
                "message" => "Equipo creado correctamente."
            ];
        } else {
            $res = [
                "status" => 500,
                "ok" => true,
                "message" => "El equipo no se ha podido crear."
            ];
        }
        http_response_code($res["status"]);
        echo json_encode($res);
    }

    function update($params) {
        AdministradorAcceso::verificar();
        $id_equipo = $params["idEquipo"];
        $post = file_get_contents("php://input");
        $data = json_decode($post, true);
        $ok = $this->model->updateEquipo($id_equipo, $data);
        if ($ok) {
            $res = [
                "status" => 200,
                "ok" => true,
                "message" => "Equipo actualizado correctamente."
            ];
        } else {
            $res = [
                "status" => 500,
                "ok" => true,
                "message" => "El equipo no se ha podido actualizar."
            ];
        }
        http_response_code($res["status"]);
        echo json_encode($res);
    }

    function delete($params) {
        AdministradorAcceso::verificar();
        $id_equipo = $params["idEquipo"];
        $ok  = $this->model->deleteEquipo($id_equipo);
        if ($ok) {
            $res = [
                "status" => 200,
                "ok" => true,
                "message" => "Equipo eliminado correctamente."
            ];
        } else {
            $res = [
                "status" => 500,
                "ok" => true,
                "message" => "El equipo no se ha podido eliminar."
            ];
        }
        http_response_code($res["status"]);
        echo json_encode($res);
    }


    function EquipoByDivision(array $params) {
        $division = $params["id"];
        $equipo = $this->model->equipoDivision($division);
        if (is_null($equipo)) {
            $res = [
                "status" => 404,
                "ok" => true,
                "message" => "Equipos de la division no encontrados."
            ];
        } else {
            $res = [
                "data" => $equipo,
                "status" => 200,
                "ok" => true,
                "message" => "Equipos de la division encontrados satisfactoriamente."
            ];
        }
        http_response_code($res["status"]);
        echo json_encode($res);
    }

    function getEquipoByCiudad(array $params) {
        $ciudad = $params["id"];
        $equipo = $this->model->equipoCiudad($ciudad);
        if (is_null($equipo)) {
            $res = [
                "status" => 404,
                "ok" => true,
                "message" => "Equipos de la ciudad no encontrados."
            ];
        } else {
            $res = [
                "data" => $equipo,
                "status" => 200,
                "ok" => true,
                "message" => "Equipos de la ciudad encontrados satisfactoriamente."
            ];
        }
        http_response_code($res["status"]);
        echo json_encode($res);
    }

    function jugadoresTotal(array $params) {
        $division = $params["id"];
        $equipo = $this->model->jugadoresTotal($division);
        if (is_null($equipo)) {
            $res = [
                "status" => 404,
                "ok" => true,
                "message" => "Equipos de la division no encontrados."
            ];
        } else {
            $res = [
                "data" => $equipo,
                "status" => 200,
                "ok" => true,
                "message" => "Equipos de la division encontrados satisfactoriamente."
            ];
        }
        http_response_code($res["status"]);
        echo json_encode($res);
    }
}