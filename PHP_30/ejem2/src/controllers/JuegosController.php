<?php

class JuegosController {
    function __construct() {
        $this->model = new JuegosModel();
    }

    function index() {
        $juegos = $this->model->getJuegos();
        $res = [
            "data" => $juegos,
            "status" => 200,
            "ok" => true,
            "message" => "Listado de juegos disponibles"
        ];
        echo json_encode($res);
    }

    /**
     * Responder a la petición url con metodo GET:
     * http://domain/juegos/1
     * 
     * Devuelve el juego cuyo id coincida.
     * 
     * @param array $params Lista de parametros que recibe el ruter
     * ```
     * [
     *      "idJuego" => "1"
     * ]
     * ```
     * @return json
     * Devuelve un json tal que asi:
     * ```
     * {
     *  "data" : {
     *          "titulo": "",
     *          "productora": "",
     *          "precio": "",
     *          "genero": "",
     *          "plataforma": ""
     *      },
     *  "status" : "200",
     *  "ok" : "true",
     *  "message" : "Juego encontrado"
     * ```
     */
    function getJuego($params) {
        $id_juego = $params["idJuego"];
        $juego = $this->model->getJuego($id_juego);
        if (is_null($juego)) {
            $res = [
                "status" => 404,
                "ok" => true,
                "message" => "Juego no encontrado."
            ];
        } else {
            $res = [
                "data" => $juego,
                "status" => 200,
                "ok" => true,
                "message" => "Juego encontrado."
            ];
        }
        http_response_code($res["status"]);
        echo json_encode($res);
    }

    function create() {
        AdministradorAcceso::verificar();

        $post = file_get_contents("php://input");
        $data = json_decode($post, true);
        $ok = $this->model->crearJuego($data);
        if ($ok) {
            $res = [
                "status" => 201,
                "ok" => true,
                "message" => "Juego creado correctamente."
            ];
        } else {
            $res = [
                "status" => 500,
                "ok" => true,
                "message" => "El juego no se ha podido crear."
            ];
        }
        http_response_code($res["status"]);
        echo json_encode($res);
    }

    function update($params) {
        AdministradorAcceso::verificar();
        $id_juego = $params["idJuego"];
        $post = file_get_contents("php://input");
        $data = json_decode($post, true);
        $ok = $this->model->updateJuego($id_juego, $data);
        if ($ok) {
            $res = [
                "status" => 200,
                "ok" => true,
                "message" => "Juego actualizado correctamente."
            ];
        } else {
            $res = [
                "status" => 500,
                "ok" => true,
                "message" => "El juego no se ha podido actualizar."
            ];
        }
        http_response_code($res["status"]);
        echo json_encode($res);
    }

    function delete($params) {
        AdministradorAcceso::verificar();
        $id_juego = $params["idJuego"];
        $ok  = $this->model->deleteJuego($id_juego);
        if ($ok) {
            $res = [
                "status" => 200,
                "ok" => true,
                "message" => "Juego eliminado correctamente."
            ];
        } else {
            $res = [
                "status" => 500,
                "ok" => true,
                "message" => "El juego no se ha podido eliminar."
            ];
        }
        http_response_code($res["status"]);
        echo json_encode($res);
    }
}
