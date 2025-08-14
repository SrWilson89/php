<?php
    session_start();
    if (!(isset($_SESSION) && $_SESSION["autenticado"])) {
        header("Location: 24-sesiones.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <p>Bienvenido, <?= $_SESSION["nombre"]?></p>
    <a href="24-sesiones_cerrar.php">Cerrar sesión</a>
</body>
</html>