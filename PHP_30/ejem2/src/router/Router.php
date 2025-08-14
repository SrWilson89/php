<?php

use \FireBase\JWT\ExpiredException;
use \FireBase\JWT\SignatureInvalidException;

/**
 * Gestiona las solicitudes http e instancia el controlador adecuado
 */
class Router {
    /**
     * Nombre de la clase controladora que habra que instanciar
     * 
     * @property string $controlador
     */
    public $controlador;
    /**
     * Nombre del método de la clase controladora que habra que instanciar
     * 
     * @property string $accion
     */
    public $accion;
    /**
     * Lista de parámetros que se recibe en la uri.
     * 
     * @property array $params
     */
    public $params;
    /**
     * Listado de las rutas que se pueden responder
     * 
     * @property array $rutas
     */
    public $rutas;

    /**
     *  Se encarga de buscar una coincidencia en el listado de rutas
     */
    function __construct(string $method, string $url) {
        $this->crearRutas();
        $ruta = $this->find($method, $url);
        //var_dump($ruta);
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

    /**
     * Crea el listado de rutas disponibles
     */
    private function crearRutas() {
        $this->rutas = [
            [
                "pattern" => "registro",
                "metodo" => "POST",
                "controller" => "AuthController",
                "accion" => "registro"
            ],
            [
                "pattern" => "login",
                "metodo" => "POST",
                "controller" => "AuthController",
                "accion" => "login"
            ],

            [
                "pattern" => "juegos",
                "metodo" => "GET",
                "controller" => "JuegosController",
                "accion" => "index"
            ],
            [
                "pattern" => "juegos/:idJuego",
                "metodo" => "GET",
                "controller" => "JuegosController",
                "accion" => "getJuego"
            ],
            [
                "pattern" => "juegos",
                "metodo" => "POST",
                "controller" => "JuegosController",
                "accion" => "create"
            ],
            [
                "pattern" => "juegos/:idJuego",
                "metodo" => "PUT",
                "controller" => "JuegosController",
                "accion" => "update"
            ],
            [
                "pattern" => "juegos/:idJuego",
                "metodo" => "DELETE",
                "controller" => "JuegosController",
                "accion" => "delete"
            ]
        ];
    }

    /**
     * Se encarga de instanciar la clase controladora y 
     * ejecutar el médoto adecuado y sus parametros
     */
    function run() {
        try {
            $obj = new $this->controlador;
            if (method_exists($obj, $this->accion)) {
                call_user_func([$obj, $this->accion], $this->params);
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
                "data" => $e->getMessage(),
                "status" => "404",
                "ok" => "false",
                "message" => "Recurso no encontrado."
            ];
            http_response_code($res["status"]);
            echo json_encode($res);
        }
    }

    /**
     * Busca en el listado de rutas una que coincida el método
     * 
     * @param string $method Cotiene un metodo HTTP (GET, POST, PUT, DELETE)
     * @param string $url Uri de la petición
     * @return null|array
     * ```
     * [
     *    "pattern" => "juegos/:idJuego",
     *    "metodo" => "PUT",
     *    "controller" => "JuegosController",
     *    "accion" => "update"
     * ]
     * ```
     */
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

    /**
     * Comprueba si la uri coincide con el patrón de la ruta
     * 
     * @param string $url Uri de la solicitud
     * @param string $recurso Patrón de la ruta
     * @return bool
     */
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
        $params = []; // array asociativo
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
