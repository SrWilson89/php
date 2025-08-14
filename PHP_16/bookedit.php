<?php

    include "bbdd_book.php";
    include "validate_book.php";

    if(isset($_GET["id"])){
        $id=$_GET["id"];
        $libro=getBook($id);
    }else{
        header('location: index.php');
    }

    if(isset($_POST["enviar"])){
        $ok = validarForm($_POST);
        if($ok !== true){
            $errores = $ok;
        }else{
            $good= book_update($id, $_POST);
            if($good){
                header('location: index.php');
            }
        }
    }

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
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

    .error {
    padding: 0;
    font-size: 1.5rem;
    font-weight: bolder;
    color: red;
    }

    main{
        width: 100%;
        height: 80vh;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    form{
        background-color: #82ccddbb;
        padding: 5px 15px;
    }

    label, input{
        font-size: 2rem;
    }

    textarea{
        width: 100%;
        height: 20vh;
        font-size: 2rem;
    }

    .boton{
        padding: 5px 15px;
        cursor: pointer;
    }

    .nuevolibro{
        width: fit-content;
        margin-left: 20px;
        margin-bottom: 5px;
        font-size: 2rem;
        padding: 5px 15px;
        background-color: black;
        border-radius: 20px;
        box-shadow: 2px 2px 2px goldenrod;
    }

    .nuevolibro a{
        color: white;
        cursor: pointer;
    }

    .nuevolibro:hover{
        background-color: whitesmoke;
    }
    .nuevolibro a:hover{
        color: black;
    }
</style>
<body>
    <header>
        <h1>ACTUALIZAR LIBRO</h1>
    </header>
    <div class="nuevolibro">
            <a href="index.php">Inicio</a>
    </div>
    <main>
        <?= include "forbook.php"; ?>
    </main>
</body>
</html>