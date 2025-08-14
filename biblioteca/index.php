<?php
include "bbdd_book.php";
include "func_sesion.php";

session_start();
// var_dump($_SESSION);
try {
    $libros = getBooks();
} catch (Exception $e) {
    echo "Exception: " . $e->getMessage();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteca</title>
    <link rel="stylesheet" href="estilos.css">
</head>

<body>
    <header>
        <a class="<?= isLogin() ? 'ocultar' : '' ?>" href="login.php">Identificarse</a>
        <a class="<?= isLogin() ? '' : 'ocultar' ?>" href="cerrar_sesion.php">Cerrar sesión</a>
        <a href="user_info.php"><?= $_SESSION["name"] ?? '' ?></a>
        <h1 class="page_title">LIBROS DISPONIBLES</h1>
    </header>
    <main>
        <div class="new_book <?= isAdmin() ? '' : 'ocultar' ?>"><a href="book_new.php">Nuevo libro</a></div>
        <div class="cards_container">
            <?php foreach ($libros as $libro) { ?>
                <article class="card">
                    <h2 class="card_title"><?= $libro["titulo"] ?></h2>
                    <p class="card_year"><?= $libro["anio_publicacion"] ?></p>
                    <p class="card_editorial"><?= $libro["editorial"] ?></p>
                    <p class="card_description"><?= $libro["descripcion"] ?></p>
                    <footer>
                        <nav>
                            <ul class="card_options">
                                <li><a class="card_link" href="book_info.php?id=<?= $libro["id_libro"] ?>">Info</a></li>
                                <li>
                                    <a class="card_link  <?= isAdmin() ? '' : 'ocultar' ?>" href="book_update.php?id=<?= $libro["id_libro"] ?>">
                                        Editar
                                    </a>
                                </li>
                                <li><a class="card_link  <?= isAdmin() ? '' : 'ocultar' ?>" href="book_delete.php?id=<?= $libro["id_libro"] ?>">Borrar</a></li>
                                <li>
                                    <a class="card_link  <?= isPartner() ? '' : 'ocultar' ?>" href="book_lend.php?id=<?= $libro["id_libro"] ?>">
                                        Prestar
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </footer>
                </article>
            <?php } ?>
        </div>
    </main>
</body>

</html>