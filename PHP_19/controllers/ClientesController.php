<?php
class ClientesController {
    function __construct() {
        $this->model = new ClientesModel();
    }
    function index() {
        $clientes = $this->model->getClientes();
        echo json_encode($clientes);
    }

    function nuevo() {
        // Recuperamos los datos incrustados en el cuerpo de la solicitud.
        $postdata = file_get_contents("php://input");
        // Convertimos los datos json en datos array asoc.
        $request = json_decode($postdata, true);
        // var_dump($request);
        if (count($request) > 0) {
            $cliente = new Cliente($request);
            $ok = $this->model->createCliente($cliente);
            if ($ok) {
                $res = [
                    "status" => 201,
                    "ok" => true,
                    "message" => "Cliente creado."
                ];
            } else {
                $res = [
                    "status" => 500,
                    "ok" => false,
                    "message" => "Se ha producido un error."
                ];
            }
            // Colocamos el codigo de respuesta en la respuesta
            // de la solicidad
            http_response_code($res["status"]);
            // Colocamos en el cuerpo de la respuesta
            // la respuesta en formato json
            echo json_encode($res);
        } else {
            $res = [
                "status" => 400,
                "ok" => false,
                "message" => "No se han recibido los datos."
            ];
            http_response_code($res["status"]);
            echo json_encode($res);
        }
    }

    function getClienteById(array $params) {
        if (isset($params["id"]) && $params["id"] > 0) {
            $cliente = $this->model->getCliente($params["id"]);
            // var_dump($cliente);
            if ($cliente) {
                $res = [
                    "data" => $cliente,
                    "status" => 200,
                    "ok" => true,
                    "message" => "Cliente encontrado."
                ];
                http_response_code($res["status"]);
                echo json_encode($res);
            } else {
                $res = [
                    "status" => 404,
                    "ok" => false,
                    "message" => "Cliente no encontrado."
                ];
                http_response_code($res["status"]);
                echo json_encode($res);
            }
        } else {
            $res = [
                "status" => 400,
                "ok" => false,
                "message" => "Falta id del cliente."
            ];
            http_response_code($res["status"]);
            echo json_encode($res);
        }
    }

    function update(array $params) {
        if (isset($params["id"]) && $params["id"] > 0) {
            $postdata = file_get_contents("php://input");
            //var_dump($postdata);
            $request = json_decode($postdata, true);
            // var_dump($request);                        

            if (count($request) >= 0) {
                $cliente = new Cliente($request);
                $cliente->setIdCliente($params["id"]);

                $ok = $this->model->updateCliente($cliente);
                if ($ok) {
                    $res = [
                        "status" => 200,
                        "ok" => true,
                        "message" => "Cliente actualizado."
                    ];
                } else {
                    $res = [
                        "status" => 500,
                        "ok" => false,
                        "message" => "Se ha producido un error."
                    ];
                }
                http_response_code($res["status"]);
                echo json_encode($res);
            } else {
                $res = [
                    "status" => 400,
                    "ok" => false,
                    "message" => "No se han recibido los datos."
                ];
                http_response_code($res["status"]);
                echo json_encode($res);
            }
        } else {
            $res = [
                "status" => 400,
                "ok" => false,
                "message" => "Falta id del cliente."
            ];
            http_response_code($res["status"]);
            echo json_encode($res);
        }
    }

    function delete(array $params) {
        $ok = $this->model->deleteCliente($params["id"]);
        if ($ok) {
            $res = [
                "status" => 200,
                "ok" => true,
                "message" => "Cliente eliminado."
            ];
        } else {
            $res = [
                "status" => 400,
                "ok" => true,
                "message" => "El cliente no se ha podido eliminar. Posiblemente tenga datos relacionados."
            ];
        }
        http_response_code($res["status"]);
        echo json_encode($res);
    }
}
