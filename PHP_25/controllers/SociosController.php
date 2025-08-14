<?php


class SociosController {
    function __construct() {
        $this->model = new SociosModel();
    }

    function index() {
        $socios = $this->model->getSocios();
        echo json_encode($socios);
    }

    function getSocio($params) {
        $id_socio = $params["id"];
        $socio = $this->model->getSocio($id_socio);
        if (!is_null($socio)) {
            $res = [
                "data" => $socio,
                "status" => 200,
                "ok" => true,
                "message" => "Socio ha sido encontrado."
            ];
        } else {
            $res = [
                "status" => 404,
                "ok" => true,
                "message" => "Socio no encontrado."
            ];
        }
        http_response_code($res["status"]);
        echo json_encode($res);
    }

    function nuevo() {
        $postsocio = file_get_contents("php://input");
        $socio = json_decode($postsocio, true);
        $ok = $this->model->createSocio($socio);
        if ($ok) {
            $res = [
                "status" => 200,
                "ok" => true,
                "message" => "El socio se ha creado satisfactoriamente."
            ];
        } else {
            $res = [
                "status" => 500,
                "ok" => true,
                "message" => "El socio no se ha podido crear."
            ];
        }
        http_response_code($res["status"]);
        echo json_encode($res);
    }

    function update($params) {
        $id_socio = $params["id"];
        $postsocio = file_get_contents("php://input");
        $socio = json_decode($postsocio, true);
        $ok = $this->model->updateSocio($id_socio, $socio);
        if ($ok) {
            $res = [
                "status" => 200,
                "ok" => true,
                "message" => "El socio se ha actualizado satisfactoriamente."
            ];
        } else {
            $res = [
                "status" => 500,
                "ok" => true,
                "message" => "El socio no se ha podido actualizar."
            ];
        }
        http_response_code($res["status"]);
        echo json_encode($res);
    }

    function delete($params) {
        $id_socio = $params["id"];
        $ok = $this->model->deleteSocio($id_socio);
        if ($ok) {
            $res = [
                "status" => 200,
                "ok" => true,
                "message" => "El socio se ha eliminado."
            ];
        } else {
            $res = [
                "status" => 500,
                "ok" => true,
                "message" => "El socio no se ha podido eliminar."
            ];
        }
        http_response_code($res["status"]);
        echo json_encode($res);
    }
}
