<?php
$games = leer_videojuegos();
// var_dump($games);

function leer_videojuegos()
{
    $juegos = [];
    $file = "juegos.txt";
    if (file_exists($file)) {
        $fp = fopen($file, "r");
        if ($fp) {
            fgets($fp); // salta linea en blanco
            do {
                $game = [];
                $game["titulo"] = fgets($fp);
                $game["anio"] = fgets($fp);
                $game["productora"] = fgets($fp);
                $game["descripcion"] = fgets($fp);
                $game["portada"] = fgets($fp);
                $juegos[] = $game;
            } while (!feof($fp));
            fclose($fp);
        }
    }
    return $juegos;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Videojuegos</title>
</head>

<body>
    <header>
        <h3>CATÁLOGO DE VIDEOJUEGOS</h3>
        <a href="add_game.php">Añadir videojuego</a>
    </header>

    <main>
        <?php for ($i = 0; $i < count($games); $i++) { ?>
            <div>
                <img height="100" src="portadas/<?= $games[$i]["portada"] ?>" alt="">
                <h4><?= $games[$i]["titulo"] ?></h4>
                <div><?= $games[$i]["anio"] ?></div>
                <div><?= $games[$i]["productora"] ?></div>
                <div><?= $games[$i]["descripcion"] ?></div>
            </div>
        <?php } ?>
    </main>
</body>

</html>