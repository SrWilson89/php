<?php
include "libs/Autoload.php";
Autoload::init();

if (isset($_GET["url"])) {
    //echo "url = " . $_GET["url"];
    $controlador = "Pagina1";
    $metodo = "index";
    $param = 0;
    // url = .../productos/editar/1
    // $url_array = ["productos", "editar", "1"];
    $url_array = explode("/", $_GET["url"]);
    //var_dump($url_array);
    if (count($url_array) === 1) {
        $controlador = $url_array[0];
    } else  if (count($url_array) === 2) {
        $controlador = $url_array[0];
        $metodo = $url_array[1];
    } else if (count($url_array) === 3) {
        $controlador = $url_array[0];
        $metodo = $url_array[1];
        $param = $url_array[2];
    }

    $class_name = ucwords($controlador) . "Controller";
    $ruta = "controllers/" . $class_name . ".php";
    if (file_exists($ruta)) {
        $obj = new $class_name;
        call_user_func([$obj, $metodo], $param);
    } else {
        $error = new ErroresController();
        $error->index();
    }
} else {
    $pag1 = new Pagina1Controller();
    $pag1->index();
}
