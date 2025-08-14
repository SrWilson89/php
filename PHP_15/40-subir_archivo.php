<?php
    $ruta_imagen = "";
    if (isset($_POST["enviar"])) {
        var_dump($_FILES);

        $nombre = $_FILES["archivo"]["name"];
        $ruta_tpr = $_FILES["archivo"]["tmp_name"];
        $tipo = $_FILES["archivo"]["type"];
        $tam = $_FILES["archivo"]["size"];

        echo "<br>Información de la imágen subida: <br />";
        echo "nombre: $nombre <br />";
        echo "alojado temporalmente: $ruta_tpr <br />";
        echo "tipo: $tipo <br />";
        echo "tamaño: $tam <br />";

        echo $_SERVER['DOCUMENT_ROOT'] . "<br>";
        $destino = $_SERVER['DOCUMENT_ROOT'] . '/teoria/archivos/';
        echo $destino . "<br>";

        // $nombre_aleatorio = uniqid('img_') . strstr($nombre, ".");
        $result = move_uploaded_file($ruta_tpr, $destino . $nombre);
        if ($result) {
            echo "Imagen subida.</br>";
            $ruta_imagen = '/teoria/archivos/' . $nombre_aleatorio;
        } else {
            echo "No se ha podido subir la imagen.";
        }
           
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST" enctype="multipart/form-data">
    <div>
        <label for="archivo">Selecciona un archivo</label><br>
        <input type="file" name="archivo" 
            accept=".pdf,.jpg,.png">
    <div>
    <input type="submit" value="Enviar" name="enviar">
    <br>
    </form>
   <?php 
    if ($ruta_imagen != "" && $tipo == "application/pdf") {
        echo "<a href='$ruta_imagen'>descargar</a>";
    } else {
        echo "<img src='$ruta_imagen' alt='Imagen subida'>";
    }
   ?>
</body>
</html>