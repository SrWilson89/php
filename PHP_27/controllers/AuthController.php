<?php

use Firebase\JWT\JWT;

class AuthController {

    function __construct() {
        $this->model = new UsuariosModel();
    }
    function registro() {
        $post = file_get_contents("php://input");
        $data = json_decode($post, true);
        // TODO: validar datos
        $data["password"] = password_hash($data["password"], PASSWORD_DEFAULT);
        $ok = $this->model->crearUsuario($data);
        if ($ok) {
            $res = [
                "status" => 201,
                "ok" => true,
                "message" => "Se ha creado correctamente."
            ];
        } else {
            $res = [
                "status" => 500,
                "ok" => true,
                "message" => "No se ha podido crear el usuario. Inténtalo más tarde."
            ];
        }
        http_response_code($res["status"]);
        echo json_encode($res);
    }

    function login() {
        $post = file_get_contents("php://input");
        $data = json_decode($post, true);
        $usr = $this->model->getUsuarioByEmail($data["email"]);
        if (is_null($usr)) {
            $res = [
                "status" => 401,
                "ok" => true,
                "message" => "Credenciales incorrectas."
            ];
            http_response_code($res["status"]);
            echo json_encode($res);
            exit();
        }
        $ok = password_verify($data["password"], $usr["password"]);
        if (!$ok) {
            $res = [
                "status" => 401,
                "ok" => true,
                "message" => "Credenciales incorrectas."
            ];
            http_response_code($res["status"]);
            echo json_encode($res);
            exit();
        }
        $time = time();
        $token = array(
            'iat' => $time, // Tiempo que inició el token
            'exp' => $time + Config::AUTH_TIME, // Tiempo que expirará el token
            'data' => [ // información del usuario
                'id' => $usr["id_usuario"],
                'username' => $usr["nombre_usuario"],
                'rol' => $usr["rol"]
            ]
        );
        $token = JWT::encode($token, Config::AUTH_KEY, Config::AUTH_ENCRYPT);
        $res = [
            "status" => 200,
            "ok" => true,
            "message" => "Identificación satisfactoria.",
            "token" => $token
        ];
        http_response_code($res["status"]);
        echo json_encode($res);
    }
}
