<?php

$datos = leer_datos();
function leer_datos()
{
    $datos = [];
    $file = "datos.txt";
    if (file_exists($file)) {
        $fp = fopen($file, "r");
        if ($fp) {
            while ($fila = fgets($fp)) {
                $datos[] = $fila;
            }
            fclose($fp);
        }
    }
    return $datos;
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OK</title>
</head>

<body>
    <p>El formulario ha sido procesado correctamente.</p>

    <div>
        <?php for ($i = 0; $i < count($datos); $i++) {
            echo $datos[$i] . "<br>";
        }
        ?>
    </div>
</body>

</html>