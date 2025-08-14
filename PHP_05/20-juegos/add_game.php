<?php
$err = [];
if (isset($_POST["enviar"])) {
    var_dump($_POST);
    echo "<hr>";
    var_dump($_FILES);
    $ok = validarForm($_POST);
    if ($ok === true) {
        $name = "";
        if ($_FILES["portada"]["name"] !== "") {
            $tmp = $_FILES["portada"]["tmp_name"];
            $name = $_FILES["portada"]["name"];
            move_uploaded_file($tmp, "portadas/" . $name);
        }
        $game = [
            "titulo" => $_POST["titulo"],
            "anio" => $_POST["anio"],
            "productora" => $_POST["productora"],
            "descripcion" => $_POST["descripcion"],
            "portada" => $name
        ];
        $good = guardar_videojuego($game);
        if ($good) {
            header("location: index.php");
        } else {
            echo "Error al guardar los datos. Inténtalo de nuevo.";
        }
    } else {
        $err = $ok;
    }
}

function guardar_videojuego(array $datos)
{
    $fp = fopen("juegos.txt", "a");
    if ($fp) {
        fputs($fp, "\n" . $datos["titulo"]);
        fputs($fp, "\n" . $datos["anio"]);
        fputs($fp, "\n" . $datos["productora"]);
        fputs($fp, "\n" . $datos["descripcion"]);
        fputs($fp, "\n" . $datos["portada"]);
        fclose($fp);
        return true;
    }
    return false;
}

function validarForm(array $datos)
{
    $errores = [];
    $titulo = $datos["titulo"];
    if ($titulo === "") {
        $errores["titulo"] = "El título es obligatorio.";
    }

    $anio = $datos["anio"];
    if ($anio !== "") {
        if (!is_numeric($anio)) {
            $errores["anio"] = "Debes escribir un número.";
        } else if ($anio < 1950) {
            $errores["anio"] = "El año parece incorrecto.";
        }
    }
    // if (empty($errores)) {
    //     return true;
    // } else {
    //     return $errores;
    // }
    return empty($errores) ? true : $errores;
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Añadir Videojuego</title>
    <link rel="stylesheet" href="estilos.css">
</head>

<body>
    <header>
        <h3>CATÁLOGO DE VIDEOJUEGOS</h3>
        <a href="index.php">Catálogo</a>
    </header>
    <h4>Añadir videojuego</h4>
    <form action="" method="POST" enctype="multipart/form-data">
        <div>
            <label for="titulo">Título *</label>
            <input name="titulo" id="titulo" type="text" value="<?= $_POST["titulo"] ?? "" ?>">
            <div class="rojo">
                <?= $err["titulo"] ?? "" ?>
            </div>
        </div>
        <div>
            <label for="anio">Año</label>
            <input name="anio" id="anio" type="number" value="<?= $_POST["anio"] ?? "" ?>">
            <div class="rojo">
                <?= $err["anio"] ?? "" ?>
            </div>
        </div>
        <div>
            <label for="productora">Productora</label>
            <input name="productora" id="productora" type="text" value="<?= $_POST["productora"] ?? "" ?>">
        </div>
        <div>
            <label for="descripcion">Descripción</label>
            <textarea name="descripcion" id="descripcion" rows="5" cols="30"><?= $_POST["descripcion"] ?? "" ?></textarea>
        </div>
        <div>
            <label for="portada">Portada</label>
            <input name="portada" id="portada" type="file">
        </div>
        <div>
            <input type="submit" name="enviar" value="Enviar">
        </div>
    </form>
</body>

</html>