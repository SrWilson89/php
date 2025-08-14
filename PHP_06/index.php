<!DOCTYPE html>
<html lang="es">

<?php
    $games=leer_videojuegos();

    function leer_videojuegos(){
        $juegos=[];
        $file="juegos.txt";
        if(file_exists($file)){
            $fp = fopen($file,"r");
            if($fp){
                fgets($fp);
                do{
                    $game =[];
                    $game["titulo"]= fgets($fp);
                    $game["lanzamiento"]= fgets($fp);
                    $game["productora"]= fgets($fp);
                    $fila=fgets($fp);
                    $game["descripcion"]="";
                    while($fila !== ">>> FIN DESCRIPCION <<<\n"){
                        $game["descripcion"].= $fila . "<br>";
                        $fila=fgets($fp);
                    }
                    $game["portada"]= fgets($fp);
                    $juegos[]=$game;
                }while(!feof($fp));
                fclose($fp);
            }
        }
        return $juegos;
    }
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="shortcut icon" href="img/ico9.jpg" type="image/x-icon">
    <link rel="stylesheet" href="css/style.css">

<?php

$datos= leerDatos();

    function leerDatos(){
        $datos=[];
        $file="videojuegos.txt";
        if(file_exists($file)){
            $fp= fopen($file, "r");
            if($fp){
                while($fila = fgets($fp)){
                    $datos[]=$fila;
                };
            fclose($fp);
            }
        }
    return $datos;
    }

?>

</head>
<body>

<h1>Listado de Video juegos</h1>

    <main>
        <?php for ($i = 0; $i < count($games); $i++) { ?>
            <div>
                <img height="100" src="img/<?= $games[$i]["portada"] ?>" alt="">
                <h4><?= $games[$i]["titulo"] ?></h4>
                <div><?= $games[$i]["lanzamiento"] ?></div>
                <div><?= $games[$i]["productora"] ?></div>
                <div><?= $games[$i]["descripcion"] ?></div>
            </div>
        <?php } ?>
    </main>



    <a href="añadirjuego.php">Añadir Video Juego</a>
    
</body>
</html>

<?php

?>