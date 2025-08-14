<?php

use Firebase\JWT\JWT;

class EquiposController {

    function __construct() {
        $this->model = new EquiposModel();
    }
    function index() {
        $equipos = $this->model->getEquipos();
        echo json_encode($equipos);
    }

    function getEquipo(array $params) {
        $id_equipo = $params["id"];

        $equipo = $this->model->getEquipo($id_equipo);
        if (!is_null($equipo)) {
            $res = [
                "data" => $equipo,
                "status" => 200,
                "ok" => true,
                "message" => "Equipo encontrado."
            ];
        } else {
            $res = [
                "status" => 404,
                "ok" => true,
                "message" => "Equipo no encontrado."
            ];
        }
        http_response_code($res["status"]);
        echo json_encode($res);
    }

    function nuevo() {
        AdministradorAcceso::verificar();

        $postequipo = file_get_contents("php://input");
        $equipo = json_decode($postequipo, true);

        $ok = $this->model->createEquipo($equipo);
        if ($ok) {
            $res = [
                "status" => 200,
                "ok" => true,
                "message" => "El equipo se ha creado satisfactoriamente."
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

    function update(array $params) {
        AdministradorAcceso::verificar();

        $id_equipo = $params["id"];
        $postequipo = file_get_contents("php://input");
        $equipo = json_decode($postequipo, true);
        $ok = $this->model->updateEquipo($id_equipo, $equipo);
        if ($ok) {
            $res = [
                "status" => 200,
                "ok" => true,
                "message" => "El equipo se ha actualizado satisfactoriamente."
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


    function delete(array $params) {
        AdministradorAcceso::verificar();

        $id_equipo = $params["id"];
        $ok = $this->model->deleteEquipo($id_equipo);
        if ($ok) {
            $res = [
                "status" => 200,
                "ok" => true,
                "message" => "El equipo se ha eliminado satisfactoriamente."
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



    function getEquipoByDivision(array $params) {
        $division= $params["id"];

        $equipo = $this->model->equipoDivision($division);
        if (!is_null($equipo)) {
            $res = [
                "data" => $equipo,
                "status" => 200,
                "ok" => true,
                "message" => "Equipos de la división solicitada"
            ];
        } else {
            $res = [
                "status" => 404,
                "ok" => true,
                "message" => "Equipos de esta division no encontrados."
            ];
        }
        http_response_code($res["status"]);
        echo json_encode($res);
    }

    function getEquipoByCiudad(array $params) {
        $ciudad= $params["id"];

        $equipo = $this->model->equipoCiudad($ciudad);
        if (!is_null($equipo)) {
            $res = [
                "data" => $equipo,
                "status" => 200,
                "ok" => true,
                "message" => "Equipos de la ciudad solicitada"
            ];
        } else {
            $res = [
                "status" => 404,
                "ok" => true,
                "message" => "Equipos de esta ciudad no encontrados."
            ];
        }
        http_response_code($res["status"]);
        echo json_encode($res);
    }

    function numeroJugadoresDivision(array $params) {
        $division= $params["id"];

        $equipo = $this->model->jugadoresTotal($division);
        if (!is_null($equipo)) {
            $res = [
                "data" => $equipo,
                "status" => 200,
                "ok" => true,
                "message" => "Numero de jugadores de la division solicitada"
            ];
        } else {
            $res = [
                "status" => 404,
                "ok" => true,
                "message" => "No hay equipos en esta división"
            ];
        }
        http_response_code($res["status"]);
        echo json_encode($res);
    }







}
