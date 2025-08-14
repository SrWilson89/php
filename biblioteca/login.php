<?php
include "bbdd_user.php";
session_start();
$msg_error = "";

if (isset($_POST["login"])) {
    $ok = validarLoginForm($_POST);
    if ($ok === true) {
        $good = loginUser($_POST);
        if ($good === false) {
            $msg_error = "Usuario y/o contraseña son inválidas.";
        } else {
            $_SESSION["autenticado"] = true;
            $_SESSION["id"] = $good["id_usuario"];
            $_SESSION["name"] = $good["nombre_usuario"];
            $_SESSION["rol"] = $good["rol"];
            header("location: index.php");
        }
    }
}

function validarLoginForm(array $data)
{
    return true;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Identificación</title>
    <link rel="stylesheet" href="estilos.css">
</head>

<body>
    <h1>Identifícate</h1>
    <div class="rojo"><?= $msg_error ?></div>
    <form action="" method="POST">
        <div>
            <label for="usuario">Usuario</label>
            <input type="text" name="usuario" id="usuario">
        </div>
        <div>
            <label for="password">Contraseña</label>
            <input type="password" name="password" id="password">
        </div>
        <div>
            <input type="submit" value="identificarse" name="login">
        </div>
    </form>
    <div>
        <a href="registro.php">Registrarse</a>
    </div>
</body>

</html>