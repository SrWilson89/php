<?php

class ValidateLogin {

    public static function validate($assoc) {
        $result = [
            "ok" => true,
            "errores" => []
        ];
        if (!$assoc) {
            $result["ok"] = false;
            $result["errores"][] = "No hay datos.";
        } else {
            if (!isset($assoc["username"])) {
                $result["ok"] = false;
                $result["errores"][] = "Falta el username.";
            }
            if (!isset($assoc["password"])) {
                $result["ok"] = false;
                $result["errores"][] = "Falta el password.";
            }
        }
        return $result;
    }
}