<?php

use Firebase\JWT\JWT;

class ProductosController {

    function __construct() {
        $this->model = new ProductosModel();
    }

    function index() {
        $productos = $this->model->getProductos();
        echo json_encode($productos);
    }

    function nuevo() {
        $postdata = file_get_contents("php://input");
        //var_dump($postdata);
        $request = json_decode($postdata, true);

        if (!isset(getallheaders()["Authorization"])) {
            $res = [
                "status" => 403,
                "ok" => false,
                "message" => "No estás autorizado para realizar esta operación."
            ];
            http_response_code($res["status"]);
            echo json_encode($res);
            exit;
        };
        $autho = getallheaders()["Authorization"];
        // var_dump($autho);
        // exit;
        $token = substr($autho, 7);
        var_dump($token);
        $ok = JWT::decode($token, Config::AUTH_KEY, [Config::AUTH_ENCRYPT]);
        var_dump($ok);
        if ($ok->data->rol != "administrador") {
            $res = [
                "status" => 403,
                "ok" => false,
                "message" => "No estás autorizado para realizar esta operación."
            ];
            http_response_code($res["status"]);
            echo json_encode($res);
            exit;
        }

        // var_dump($request);
        if ($request && count($request) > 0) {
            $producto = new Producto($request);
            $ok = $this->model->createProducto($producto);
            if ($ok) {
                $res = [
                    "status" => 201,
                    "ok" => true,
                    "message" => "Producto creado."
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
    }

    function updateProducto($params) {
        if (isset($params["id"]) && $params["id"] > 0) {
            $postdata = file_get_contents("php://input");
            //var_dump($postdata);
            $request = json_decode($postdata, true);
            // var_dump($request);                        

            if (count($request) >= 0) {
                $producto = $this->model->getProducto($params["id"]);
                $imagen = $producto->nombre_imagen;
                $producto = new Producto($request);
                $producto->setIdProducto($params["id"]);
                $producto->setNombreImagen($imagen);
                $ok = $this->model->updateProducto($producto);
                if ($ok) {
                    $res = [
                        "status" => 200,
                        "ok" => true,
                        "message" => "Producto actualizado."
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
                "message" => "Falta id del producto."
            ];
            http_response_code($res["status"]);
            echo json_encode($res);
        }
    }

    function getProductoById($params) {
        //var_dump($params);
        if (isset($params["id"]) && $params["id"] > 0) {
            $producto = $this->model->getProducto($params["id"]);
            // var_dump($producto);
            if ($producto) {
                $res = [
                    "data" => $producto,
                    "status" => 200,
                    "ok" => true,
                    "message" => "Producto encontrado."
                ];
                http_response_code($res["status"]);
                echo json_encode($res);
            } else {
                $res = [
                    "status" => 404,
                    "ok" => false,
                    "message" => "Producto no encontrado."
                ];
                http_response_code($res["status"]);
                echo json_encode($res);
            }
        } else {
            $res = [
                "status" => 400,
                "ok" => false,
                "message" => "Falta id del producto."
            ];
            http_response_code($res["status"]);
            echo json_encode($res);
        }
    }

    function deleteProducto($params) {
        $ok = $this->model->deleteProducto($params["id"]);
        if ($ok) {
            $res = [
                "status" => 200,
                "ok" => true,
                "message" => "Producto eliminado."
            ];
            http_response_code($res["status"]);
            echo json_encode($res);
        } else {
            $res = [
                "status" => 400,
                "ok" => true,
                "message" => "El producto no se ha podido eliminar. Posiblemente tenga datos relacionados."
            ];
            http_response_code($res["status"]);
            echo json_encode($res);
        }
    }
}
