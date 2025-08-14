<?php

include "bbdd_film.php";

try{
    $pelicula = getfilms();
    //var_dump($pelicula);
}catch(Exception $e){
    echo "Exception: " . $e->getMessage();
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteca</title>
    <link rel="shortcut icon" href="img/ico9.jpg" type="image/x-icon">
</head>
<style>

    *{
        margin: 0;
        padding: 0;
    }

    header{
        width: 100%;
        text-align: center;
    }

    .nuevopelicula{
        width: fit-content;
        margin-left: 20px;
        margin-bottom: 5px;
        font-size: 2rem;
        padding: 5px 15px;
        background-color: black;
        border-radius: 20px;
        box-shadow: 2px 2px 2px goldenrod;
    }

    .nuevopelicula a{
        color: white;
        cursor: pointer;
    }

    .nuevopelicula:hover{
        background-color: whitesmoke;
    }
    .nuevopelicula a:hover{
        color: black;
    }

    .container{
        width: 100%;
        height: 100vh;
        display: flex;
        justify-content: space-around;
        flex-wrap: wrap;
    }

    .container article{
        width: 25vw;
        padding: 5px 15px;
        background-color: lightsteelblue;
        margin-bottom: 5px;
        border-radius: 20px;
        border: 1px solid black;
    }

    .titulo, .anio, .editorial{
        font-size: 2rem;
    }

    .container article nav{
        margin-left: 25px;
    }

</style>
<body>
    <header>
        <h1>LIBROS DISPONIBLES</h1>
    </header>
    <main>
        <div class="nuevopelicula">
            <a href="nuevopelicula.php">Nuevo pelicula</a>
        </div>
        <div class="container">
            <?php foreach ($pelicula as $pelicula) {?>
                <article>
                    <h2 class="titulo"><?=$pelicula["titulo"] ?></h2>
                    <p class="anio"><?=$pelicula["anio"] ?></p>
                    <p class="editorial"><?=$pelicula["editorial"] ?></p>
                    <p class="descripción"><?=$pelicula["descripción"] ?></p>
                    <nav>
                        <ul>
                            <li><a href="filminfo.php?id=<?= $pelicula["id_pelicula"] ?>">Informacion</a></li>
                            <li><a href="filmedit.php?id=<?= $pelicula["id_pelicula"] ?>">Editar</a></li>
                            <li><a href="filmdelete.php?id=<?= $pelicula["id_pelicula"] ?>">Borrar</a></li>
                        </ul>
                    </nav>
                </article>
            <?php } ?>
        </div>
    </main>
</body>
</html>