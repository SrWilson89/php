<?php

use Firebase\JWT\JWT;

class AuthController {

    function __construct() {
        $this->model = new UsuarioModel();
    }

    function login() {
        $postdata = file_get_contents("php://input");
        $request = json_decode($postdata, true);
        // var_dump($request);

        $user = $this->model->getUsuarioByEmail($request["email"]);
        // var_dump($user);
        $ok = password_verify($request["password"], $user->password);
        if ($ok) {
            $time = time();
            $token = array(
                'iat' => $time, // Tiempo que inició el token
                'exp' => $time + Config::AUTH_TIME, // Tiempo que expirará el token
                'data' => [ // información del usuario
                    'id' => $user->id,
                    'username' => $user->nombre,
                    'rol' => $user->rol
                ]
            );
            $token = JWT::encode($token, Config::AUTH_KEY, Config::AUTH_ENCRYPT);
            // $untoken = JWT::decode($token, Config::AUTH_KEY, Array(Config::AUTH_ENCRYPT));
            $res = [
                "status" => 200,
                "ok" => true,
                "message" => "Identificación satisfactoria.",
                "token" => $token
                // "data" => $untoken // Solo para comprobar, hay que quitarlo
            ];
        } else {
            $res = [
                "status" => 401,
                "ok" => false,
                "message" => "Identificación inválida."
            ];
        }
        http_response_code($res["status"]);
        echo json_encode($res);
        exit;
    }
}
