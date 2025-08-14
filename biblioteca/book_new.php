<?php
include "bbdd_book.php";
include "validate_book.php";
include "func_sesion.php";

session_start();
if (!isAdmin()) {
    header('location: index.php');
}

if (isset($_POST["enviar"])) {
    $ok = validarForm($_POST);
    if ($ok === true) {
        try {
            $good = saveBook($_POST);
            if ($good) {
                header("location: index.php");
            }
        } catch (Exception $e) {
            echo "Exception: " . $e->getMessage();
        }
    }
}



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuevo Libro</title>
    <link rel="stylesheet" href="estilos.css">
</head>

<body>
    <header>
        <h1 class="page_title">NUEVO LIBRO</h1>
    </header>
    <main>
        <?php
        include "form_book.php";
        ?>
    </main>
</body>

</html>