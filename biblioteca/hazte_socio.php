<?php
include "func_sesion.php";
include "bbdd_user.php";
include "bbdd_partnership.php";
session_start();

if (!isLogin()) {
    header("location: index.php");
}

if (isset($_POST["enviar"])) {
    $ok = validarSocioForm($_POST);
    if ($ok === true) {
        $good = saveSocio($_SESSION["id"], $_POST);
        if ($good) {
            $usr = getUserById($_SESSION["id"]);
            if (!is_null($usr)) {
                $_SESSION["name"] = $usr["nombre_usuario"];
                $_SESSION["rol"] = $usr["rol"];
            } else {
                session_destroy();
                header('location: login.php');
            }
        }
    }
}

function validarSocioForm(array $data)
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
    <title>Hazte socio</title>
    <link rel="stylesheet" href="estilos.css">
</head>

<body>
    <header>
        <a class="<?= isLogin() ? 'ocultar' : '' ?>" href="login.php">Identificarse</a>
        <a class="<?= isLogin() ? '' : 'ocultar' ?>" href="cerrar_sesion.php">Cerrar sesión</a>
        <a href="user_info.php"><?= $_SESSION["name"] ?? '' ?></a>
        <h1 class="page_title">HAZTE SOCIO</h1>
    </header>
    <main>
        <form action="" method="POST">
            <div>
                <label for="nombre">Nombre</label>
                <input value="<?= $socio["nombre"] ?? '' ?>" type="text" name="nombre" id="nombre">
            </div>
            <div>
                <label for="apellidos">Apellidos</label>
                <input value="<?= $socio["apellidos"] ?? '' ?>" type="text" name="apellidos" id="apellidos">
            </div>
            <div>
                <input type="submit" value="Enviar" name="enviar">
            </div>
        </form>
    </main>
</body>

</html>