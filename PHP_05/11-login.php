<?php
//var_dump($_POST);
if (isset($_POST["login"])) {
    $usr = $_POST["usuario"];
    $pass = $_POST["password"];

    if ($usr === "admin" && $pass === "1234") {
        echo "Tienes acceso. Puedes pasar";
        header("location: 11-formulario-post-2.php");
    }
}
