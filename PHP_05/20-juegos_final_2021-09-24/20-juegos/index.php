<?php
include "funciones.php";
$games = leer_videojuegos();
// var_dump($games);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Videojuegos</title>
    <link rel="stylesheet" href="estilos.css">
</head>

<body>
    <header>
        <h3>CATÁLOGO DE VIDEOJUEGOS</h3>
        <a href="add_game.php">Añadir videojuego</a>
    </header>

    <main>
        <div class="games_container">
            <?php for ($i = 0; $i < count($games); $i++) { ?>
                <div class="card">
                    <div>
                        <img height="150" src="portadas/<?= $games[$i]["portada"] ?>" alt="">
                    </div>
                    <div class="card-body">
                        <div>
                            <header>
                                <h4><?= $games[$i]["titulo"] ?></h4>
                            </header>
                            <main>
                                <div><?= $games[$i]["anio"] ?></div>
                                <div><?= $games[$i]["productora"] ?></div>
                                <div><?= str_replace("\n", "<br>", $games[$i]["descripcion"]) ?></div>
                            </main>
                        </div>
                        <footer class="right">
                            <a href="delete_game.php?delete=<?= $i ?>">Quitar</a>
                        </footer>
                    </div>
                </div>
            <?php } ?>
        </div>
    </main>
</body>

</html>