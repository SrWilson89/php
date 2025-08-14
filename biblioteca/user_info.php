<?php
include "func_sesion.php";
include "bbdd_user.php";
include "bbdd_book.php";

session_start();

if (!isLogin()) {
    header("location: index.php");
}

$user = getUserById($_SESSION["id"]);
$libros = getLibrosPrestados($user["id_usuario"]);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuario</title>
    <link rel="stylesheet" href="estilos.css">
</head>

<body>
    <header>
        <a class="<?= isLogin() ? 'ocultar' : '' ?>" href="login.php">Identificarse</a>
        <a class="<?= isLogin() ? '' : 'ocultar' ?>" href="cerrar_sesion.php">Cerrar sesión</a>
        <a href="user_info.php"><?= $_SESSION["name"] ?? '' ?></a>
        <h1 class="page_title">INFORMACIÓN DEL USUARIO</h1>
    </header>
    <main>
        <div>
            <label>Nombre de usuario: </label>
            <p><?= $user["nombre_usuario"] ?></p>
        </div>
        <div>
            <label>Correo electrónico: </label>
            <p><?= $user["email"] ?></p>
        </div>
        <div>
            <label>Fecha de creación: </label>
            <p><?= $user["created_at"] ?></p>
        </div>
        <div>
            <a class="<?= isPartner() ? 'ocultar' : '' ?>" href="hazte_socio.php">Hazte socio</a>
            <a href="index.php">Volver</a>
        </div>
        <table>
            <thead>
                <tr>
                    <th>Titulo del libro</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($libros as $libro) { ?>
                    <tr>
                        <td><?= $libro["titulo"] ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </main>
</body>

</html>