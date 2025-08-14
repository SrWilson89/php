<?php
include "bbdd_book.php";
include "validate_book.php";
include "func_sesion.php";
include "bbdd_prestamos.php";

session_start();
if (!isPartner()) {
    header('location: index.php');
}

if (isset($_GET["id"])) {
    $id = $_GET["id"];
    $libro = getBook($id);
    $prestado = estaPrestado($id);
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
    <title>Actualizar</title>
    <link rel="stylesheet" href="estilos.css">
</head>

<body>
    <header>
        <h1 class="page_title">PRESTAMO DE LIBRO</h1>
    </header>
    <main>
        <h2 class="card_title"><?= $libro["titulo"] ?></h2>
        <p class="card_year"><?= $libro["anio_publicacion"] ?></p>
        <p class="card_editorial"><?= $libro["editorial"] ?></p>
        <p class="card_description"><?= $libro["descripcion"] ?></p>

        <a class="<?= $prestado ? 'ocultar' : '' ?>" href="prestar_libro.php?id=<?= $libro["id_libro"] ?>">Solicitar prestamo</a>
        <p class="<?= $prestado ? '' : 'ocultar' ?>">LIBRO PRESTADO</p>
        <a href="index.php">Volver</a>
    </main>
</body>

</html>