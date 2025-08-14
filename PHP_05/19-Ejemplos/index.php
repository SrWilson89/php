<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="shortcut icon" href="img/ico9.jpg" type="image/x-icon">
    <link rel="stylesheet" href="css/style.css">

    <?php

    include "funciones.php";

    $colores = ["rojo", "amarillo", "verde", "azul", "rosa", "violeta"];

    $aficiones = ["Leer", "Cine", "Deporte", "Series", "Videojuegos", "Salir con amigos", "Turismo"];

    $frutas = ["Sandia", "Melon", "Uvas", "Naranja", "Manzana"];

    $errores = [];

    if (isset($_POST["enviar"])) {

        $ok = validarForm($_POST, $colores);
        if ($ok !== true) {
            $errores = $ok;
        }else{
            guardar_datos($_POST);
            header("location: datosok.php");
        }
    }

    function guardar_datos(array $data){
        $filename = "datos.txt";
        $fp = fopen($filename, "a");
        if($fp){
            fputs($fp, $data["nombre"] . "\n");
            fputs($fp, $data["hermanos"] . "\n");
            fputs($fp, $data["nacimiento"] . "\n");
            fputs($fp, $data["color"] . "\n");
            if(!empty ($data["aficion"])){
                fputs($fp, $data["aficion"][0]);
                for($i = 1; $i < count($data["aficion"]);$i++){
                    fputs($fp,", " . $data["aficion"][$i]);
                }
                fputs($fp, "\n");
            }
            fputs($fp, $data["fruta"] . "\n");
            fclose($fp);
        }
    }

    ?>

</head>

<body>

    <form action="" method="POST">
        <div>
            <label for="nombre">Nombre: </label>
            <input type="text" name="nombre" id="nombre" value="<?=$_POST["nombre"] ?? "" ?>">
            <div class="error"><?= $errores["nombre"] ?? "" ?></div>
        </div>

        <div>
            <label for="hermanos">¿Cuantos hermanos tienes? </label>
            <input type="number" name="hermanos" id="hermanos" value="<?=$_POST["hermanos"] ?? "" ?>">
            <div class="error"><?= $errores["hermanos"] ?? "" ?></div>
        </div>

        <div>
            <label for="nacimiento">Fecha de nacimiento </label>
            <input type="date" name="nacimiento" id="nacimiento" value="<?=$_POST["nacimiento"] ?? "" ?>">
            <div class="error"><?= $errores["nacimiento"] ?? "" ?></div>
        </div>

        <div>
            <label for="color">color preferido </label>
            <select name="color" id="color">
                <?php for ($x = 0; $x < count($colores); $x++) { ?>
                    <option value="<?= $colores[$x]; ?>" 
                    <?=isset($_POST["color"]) && $colores[$x] ===$_POST["color"] ? "selected": ""?>>
                        <?= $colores[$x]; ?></option>
                <?php } ?>
            </select>
            <div class="error"><?= $errores["color"] ?? "" ?></div>
        </div>

        <div>
            <label>Marca tus aficiones</label><br>

            <?php for ($x = 0; $x < count($aficiones); $x++) { ?>
                <label for="aficion<?= $x ?>"><?= $aficiones[$x]; ?></label>
                <input <?= isset($_POST["aficion"]) && 
                estaAficion($aficiones[$x], $_POST["aficion"]) ? "checked": "" ?>
                type="checkbox" name="aficion[]" id="aficion<?= $x ?>" value="<?= $aficiones[$x]; ?>">
                <br>
            <?php } ?>
            <div class="error"><?= $errores["aficion"] ?? "" ?></div>
        </div>

        <div>
            <label>Elije tu fruta</label><br>

            <?php for ($x = 0; $x < count($frutas); $x++) { ?>
                <label for="fruta<?= $x ?>"><?= $frutas[$x]; ?></label>
                <input <?=isset($_POST["fruta"]) && $frutas[$x] ===$_POST["fruta"] ? "checked": ""?>
                type="radio" name="fruta" id="fruta<?= $x ?>" value="<?= $frutas[$x]; ?>"><br>
            <?php } ?>

            <div class="error"><?= $errores["fruta"] ?? "" ?></div>
        </div>

        <div>
            <input type="submit" value="Enviar" name="enviar">
        </div>


    </form>

</body>

</html>