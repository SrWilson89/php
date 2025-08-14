<?php
    $ruta_imagen = "";
    if (isset($_POST["enviar"])) {
        // var_dump($_FILES);

        $imagenesMal = [];
        $imagenesBien= [];
        foreach ($_FILES as $archivo) {
            if (validarImagen($archivo)) {
                
                $ruta_tpr = $archivo["tmp_name"];
                $nombre = $archivo["name"];
                $destino = $_SERVER['DOCUMENT_ROOT'] . '/teoria/archivos/';
                $nombre_aleatorio = uniqid('img_') . strstr($nombre, ".");
                $imagenesBien[] = $nombre_aleatorio;
                $result = move_uploaded_file($ruta_tpr, $destino . $nombre_aleatorio);
                if (!$result) {
                    $imagenesMal[] = $archivo["name"];
                }
            } else {
                $imagenesMal[] = $archivo["name"];
            }
        }

        if (count($imagenesMal) >0) {
            echo "Las siguientes imágenes no cumplen los requisitos: ";
            echo implode(", ", $imagenesMal);
            echo "<br>Solo imagenes jpeg y tamaño inferior a 50.000 bytes";
        }

    }

    function validarImagen($imagen) {

        if ($imagen["size"]>100000) {
            // echo "Tamaño demasiado grande.";
            return false;
        }
        if ($imagen["type"] != "image/jpeg") {
            // echo "Solo se admiten imagenes jpeg.";
            return false;
        }
        return true;
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
        <input type="file" name="archivo1" 
            accept=".pdf,.jpg,.png"><br>
        <input type="file" name="archivo2" 
            accept=".pdf,.jpg,.png"><br>
        <input type="file" name="archivo3" 
            accept=".pdf,.jpg,.png"><br>
    <div>
    <input type="submit" value="Enviar" name="enviar">
    <br>
    </form>
   <?php 
    foreach ($imagenesBien as $nombre) {
        echo "<img src='/teoria/archivos/$nombre' alt='Imagen subida'>";
    }
   ?>
</body>
</html>