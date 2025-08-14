<?php
$errores = [];
if (isset($_POST["registrar"])) {
    $ok = validarForm($_POST);
    if ($ok !== true) {
        $errores = $ok;
    } else {
        $good = guardarForm($_POST);
        if ($good) {
            header("location: datos_guardados.php");
        }
    }
}
function guardarForm(array $datos)
{
    $filename = "datos.txt";
    $fp = fopen($filename, "a");
    if ($fp) {
        $trat = $datos["tratamiento"] ?? "";
        fputs($fp, "\n" . $trat);
        fputs($fp, "\n" . $datos["nombre"]);
        fputs($fp, "\n" . $datos["apellidos"]);
        fputs($fp, "\n" . $datos["edad"]);
        fputs($fp, "\n" .  $datos["telefono"]);
        fclose($fp);
        return true;
    }
    return false;
}

function validarForm(array $datos)
{
    $err = [];
    
    $nombre = $datos["nombre"];
    if ($nombre === "") {
        $err["nombre"] = "Falta el nombre.";
    }
    $apellidos = $datos["apellidos"];
    if ($apellidos === "") {
        $err["apellidos"] = "Falta los apellidos.";
    }
    $edad = $datos["edad"];
    if ($edad==="") {
        $err["edad"] = "Debe rellenar este campo";
    }
    $edad = $datos["edad"];
    $edad1 = intval($edad);
    
    if ($edad1 >= 18) {
        $err["edad"] = "Debe ser mayor de edad";
    }
    $telefono = $datos["telefono"];
    if ($telefono === "") {
        $err["telefono"] = "El telefono debe comenzar por 6,7,8 o 9 y no debe contener letras";
    }
    
    return empty($err) ? true : $err;
}


?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
    <link rel="stylesheet" href="estilos.css">
</head>

<body>
    <div class="main-container">
        <form class="form" method="POST">
            <div class="form_field">
                <label class="form_label" for="nombre">Nombre</label>
                <input value="<?= $_POST["nombre"] ?? "" ?>" class="form_input-text" type="text" name="nombre" id="nombre">
                <p class="form_error"><?= $errores["nombre"] ?? "" ?></p>
            </div>
            <br>
            <div class="form_field">
                <label class="form_label" for="apellidos">Apellidos</label>
                <input value="<?= $_POST["apellidos"] ?? "" ?>" calss="form_input-text" type="text" name="apellidos" id="apellidos">
                <p class="form_error"><?= $errores["apellidos"] ?? "" ?></p>
            </div>
            <br>
            <div class="form_field">
                <label class="form_label" for="edad">Edad</label>
                <input value="<?= $_POST["edad"] ?? "" ?>" calss="form_input-text" type="text" name="edad" id="edad">
                <p class="form_error"><?= $errores["edad"] ?? "" ?></p>
            </div>
            <br>
            <div class="form_field">
                <label class="form_label" for="telefono">Telefono</label>
                <input value="<?= $_POST["telefono"] ?? "" ?>" calss="form_input-text" type="text" name="telefono" id="telefono">
                <p class="form_error"><?= $errores["telefono"] ?? "" ?></p>
            </div>
            <br>
            <div class="form_buttons">
                <input class="form_button" type="submit" value="Enviar" name="registrar" id="registrar">
            </div>
        </form>
    </div>
</body>

</html>