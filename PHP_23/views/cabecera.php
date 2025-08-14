<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteca</title>
    <link rel="stylesheet" href="<?= Config::URL_BASE . "/estilos.css" ?>">
</head>

<body>
    <div class="main-container">
        <header class="cabecera">
            <div>
                <h1 class="cabecera_titulo">Net-Video</h1>
            </div>
            <div class="cabecera_right">
                <p class="cabecera_usuario"><?= $_SESSION["nombre"] ?? '' ?></p>
                <a class="cabecera_link <?= isset($_SESSION["autenticado"]) ? 'ocultar' : '' ?>" href="<?= Config::URL_BASE . '/login' ?>">Login</a>
                <a class="cabecera_link <?= isset($_SESSION["autenticado"]) ? 'ocultar' : '' ?>" href="<?= Config::URL_BASE . '/registro' ?>">Registro</a>
                <a class="cabecera_link <?= isset($_SESSION["autenticado"]) ? '' : 'ocultar' ?>" href="<?= Config::URL_BASE . '/login/cerrar' ?>">Salir</a>
            </div>
        </header>