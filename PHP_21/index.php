<?php
include_once "libs/Autoload.php";
Autoload::init();
/**
 * Primero crear controlador para iniciar
 * El controlador decide que debe hacer.
 */
//echo "URL: " . $_GET["url"];
echo "<hr>";
// Compruebo si existe la key url.
if (isset($_GET["url"])) {
    $controlador = "Home";
    $accion = "index";
    $param = 0;
    $url_array = explode("/", $_GET["url"]);
    var_dump($url_array);
    if (count($url_array) === 1) {
        $controlador = $url_array[0];
    } else if (count($url_array) === 2) {
        $controlador = $url_array[0];
        $accion = $url_array[1];
    } else if (count($url_array) === 3) {
        $controlador = $url_array[0];
        $accion = $url_array[1];
        $param = $url_array[2];
    }

    // Nos evitamos crear mucho if..else if
    // para instanciar los controladores
    $name_class = ucwords($controlador) . "Controller";
    $ruta = $_SERVER["DOCUMENT_ROOT"] . "/mvc3/controllers/" . $name_class . ".php";
    //var_dump($ruta);
    if (file_exists($ruta)) {
        $ctrl = new $name_class;
        $ok = call_user_func([$ctrl, $accion], $param);
    } else {
        $error = new ErroresController();
        $error->index();
    }
} else {
    $home = new HomeController();
    $home->index();
}
