<?php
include "funciones.php";
$colores = [
    "rojo", "amarillo", "azul",
    "verde", "gris", "blanco", "negro"
];
$aficiones = [
    "Leer", "Cine", "Series",
    "Hacer deporte", "Videojuegos", "Senderismo",
    "Salir con los amigos"
];
$frutas = [
    "sandia", "melon", "uvas", "manzana", "naranja", "kiwi",
    "melocon", "mandarina", "albaricoque"
];
$errores = [];
if (isset($_POST["enviar"])) {
    $ok = validarForm($_POST, $colores);
    if ($ok !== true) {
        $errores = $ok;
    } else {
        header("location: datos_ok.php");
    }
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilos.css">
</head>


<body>
    <form action="" method="POST">
        <div>
            <label for="nombre">Escribe tu nombre</label>
            <input type="text" name="nombre" id="nombre" value="<?= $_POST["nombre"] ?? "" ?>">
            <div class="rojo">
                <?= $errores["nombre"] ?? "" ?>
            </div>
        </div>
        <div>
            <label for="hermanos">¿Cuantos hermanos/as tienes?</label>
            <input type="number" name="hermanos" id="hermanos" value="<?= $_POST["hermanos"] ?? 0 ?>">
            <div class="rojo">
                <?= $errores["hermanos"] ?? "" ?>
            </div>
        </div>
        <div>
            <label for="fecha">Fecha de nacimiento</label>
            <input type="date" name="fecha" id="fecha" value="<?= $_POST["fecha"] ?? "" ?>">
            <div class="rojo">
                <?= $errores["fecha"] ?? "" ?>
            </div>
        </div>
        <div>
            <label for="color">Elige tu color preferido</label>
            <select name="color">
                <!-- <option value="prueba">prueba</option> -->
                <?php for ($i = 0; $i < count($colores); $i++) { ?>
                    <option <?= isset($_POST["color"]) &&  $colores[$i] === $_POST["color"] ? "selected" : "" ?> value="<?= $colores[$i] ?>">
                        <?= $colores[$i] ?>
                    </option>
                <?php } ?>
            </select>
            <div class="rojo">
                <?= $errores["color"] ?? "" ?>
            </div>
        </div>
        <div>
            <label>Marca tus aficciones favoritas</label>
            <div class="rojo">
                <?= $errores["aficion"] ?? "" ?>
            </div>
            <?php for ($i = 0; $i < count($aficiones); $i++) { ?>
                <div>
                    <input <?= isset($_POST["aficion"])
                                && estaAficion($aficiones[$i], $_POST["aficion"])
                                ? "checked" : "" ?> name="aficion[]" type="checkbox" id="aficion<?= $i ?>" value="<?= $aficiones[$i] ?>">
                    <label for="aficion<?= $i ?>"><?= $aficiones[$i] ?></label>
                </div>
            <?php } ?>

        </div>
        <div>
            <label>Escoge tu fruta favorita</label>
            <div class="rojo">
                <?= $errores["frutas"] ?? "" ?>
            </div>
            <?php for ($i = 0; $i < count($frutas); $i++) { ?>
                <div>
                    <input <?= isset($_POST["frutas"]) &&  $frutas[$i] === $_POST["frutas"]
                                ? "checked" : "" ?> type="radio" name="frutas" id="fruta<?= $i ?>" value="<?= $frutas[$i] ?>">
                    <label for="fruta<?= $i ?>"><?= $frutas[$i] ?></label>
                </div>
            <?php } ?>
        </div>
        <div>
            <input type="submit" value="Enviar" name="enviar">
        </div>
    </form>
</body>

</html>