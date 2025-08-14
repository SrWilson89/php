<?php

    include "bbdd_book.php";

    if(isset($_GET["id"])){
        $id=$_GET["id"];
        $pelicula=GetFilm($id);
        if(is_null($pelicula)){
            header('location: index.php');
        }
    }else{
        header('location: index.php');
    }

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informacion</title>
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

    article{
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    article div{
        width: 50vw;
        font-size: 1.5rem;
        background-color: #74b9ffaa;
        padding: 5px 15px;
        border-radius: 20px;
    }

</style>
<body>
    <header>
        <h1>INFORMACION DE PELICULA</h1>
    </header>
    <div class="nuevopelicula">
        <a href="index.php">Inicio</a>
    </div>
    <article>
        <div>
            <h2 class="titulo"><?=$pelicula["titulo"] ?></h2>
            <hr>
            <p class="anio"><?=$pelicula["anio"] ?></p>
            <p class="editorial"><?=$pelicula["editorial"] ?></p>
            <p class="descripción"><?=$pelicula["descripción"] ?></p>
        </div>
    </article>
</body>
</html>