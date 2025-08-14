<?php
include "bbdd_book.php";

if (isset($_GET["id"])) {
    $id = $_GET["id"];
    $libro = getBook($id);
    if (is_null($libro)) {
        header('location: index.php');
    }
} else {
    header('location: index.php');
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Información</title>
    <link rel="stylesheet" href="estilos.css">
</head>

<body>
    <header>
        <h1 class="page_title">INFORMACIÓN</h1>

    </header>
    <main>
        <article>
            <h2><?= $libro["titulo"] ?? '' ?></h2>
            <label>Editorial</label>
            <p><?= $libro["editorial"] ?? '' ?></p>
            <label>Año de publicación</label>
            <p><?= $libro["anio_publicacion"] ?? '' ?></p>
            <label>Descripción</label>
            <p><?= $libro["descripcion"] ?? '' ?></p>
        </article>
        <a href="index.php">Volver</a>
    </main>
</body>

</html>