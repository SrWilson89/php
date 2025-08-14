<?php

use \FireBase\JWT\ExpiredException;
use \FireBase\JWT\SignatureInvalidException;

class Router {
    public $controlador;
    public $accion;
    public $params;

    function __construct($method, $url) {
        $this->crearRutas();
        $ruta = $this->find($method, $url);
        if ($ruta) {
            $this->controlador = $ruta["controller"];
            $this->accion = $ruta["accion"];
            $this->params = $this->getParams($ruta["pattern"], $url);
        } else {
            $res = [
                "status" => "404",
                "ok" => "false",
                "message" => "Recurso no encontrado."
            ];
            http_response_code($res["status"]);
            echo json_encode($res);
        }
    }

    private function crearRutas() {
        $this->rutas = [
            ["pattern" => "productos", "metodo" => "GET", "controller" => "ProductosController", "accion" => "index"],
            ["pattern" => "productos", "metodo" => "POST", "controller" => "ProductosController", "accion" => "nuevo"],
            ["pattern" => "productos/:id", "metodo" => "GET", "controller" => "ProductosController", "accion" => "getProductoById"],
            ["pattern" => "productos/:id", "metodo" => "PUT", "controller" => "ProductosController", "accion" => "updateProducto"],
            ["pattern" => "productos/:id", "metodo" => "DELETE", "controller" => "ProductosController", "accion" => "deleteProducto"],
            ["pattern" => "login", "metodo" => "POST", "controller" => "AuthController", "accion" => "login"],
        ];
    }

    function run() {

        try {
            $obj = new $this->controlador;
            if (method_exists($obj, $this->accion)) {
                call_user_func([$obj, $this->accion], $this->params);
                exit;
            } else {
                $res = [
                    "status" => "404",
                    "ok" => "false",
                    "message" => "Recurso no encontrado."
                ];
                http_response_code($res["status"]);
                echo json_encode($res);
            }
        } catch (ExpiredException $e) {
            $res = [
                "status" => "400",
                "ok" => "false",
                "message" => "Sesión caducada. Identifícate de nuevo."
            ];
        } catch (SignatureInvalidException $e) {
            $res = [
                "status" => "400",
                "ok" => "false",
                "message" => "Sesión inválida. Identifícate de nuevo."
            ];
        } catch (Exception $e) {
            $res = [
                "status" => "500",
                "ok" => "false",
                "message" => $e->getMessage()
                // "err" => $e->getTrace()
            ];
        }
        http_response_code($res["status"]);
        echo json_encode($res);
    }

    function find($method, $url) {
        foreach ($this->rutas as $value) {
            if ($value["metodo"] == $method) {
                $coincide = $this->matchPattern($url, $value["pattern"]);
                if ($coincide) {
                    return $value;
                }
            }
        }
        return null;
    }

    function matchPattern($url, $recurso) {
        $urlArray  = explode("/", $url);
        //var_dump($urlArray);
        $recursoArray = explode("/", $recurso);
        //var_dump($recursoArray);
        if (count($urlArray) == count($recursoArray)) {
            for ($i = 0; $i < count($urlArray); $i++) {
                $firstLetter = substr($recursoArray[$i], 0, 1);
                if ($firstLetter != ":") {
                    if ($urlArray[$i] != $recursoArray[$i]) return false;
                }
            }
            return true;
        }
        return false;
    }

    function getParams($pattern, $url) {
        $params = [];
        $urlArray  = explode("/", $url);
        //var_dump($urlArray);
        $patternArray = explode("/", $pattern);
        for ($i = 0; $i < count($patternArray); $i++) {
            if (substr($patternArray[$i], 0, 1) == ":") {
                $key = substr($patternArray[$i], 1);
                $param = array($key => $urlArray[$i]);
                $params = array_merge($params, $param);
            }
        }
        // var_dump($params);
        return $params;
    }
}
