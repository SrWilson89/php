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

    $colores = ["Canela", "Blanco", "Negro", "Moteado", "Gris", "Marron"];

    $pienso = ["Pienso seco", "Comida húmeda", "BARF", "ACBA", "Comida casera"];

    $errores = [];

    if (isset($_POST["enviar"])) {

        $ok = validarForm($_POST, $colores);
        if ($ok !== true) {
            $errores = $ok;
        } else {
            $piensos=$_POST["pienso"];
            $dog=[
                "nombre"=>$_POST["nombre"],
                "alergias"=>$_POST["alergias"],
                "perros"=>$_POST["perros"],
                "nacimiento"=>$_POST["nacimiento"],
                "color"=>$_POST["color"],
                "pienso"=> implode("<br>",$piensos)
            ];

            $ok=guardar_perros($dog);

            if($ok){
                header("location: datosok.php");
            }else{
                echo "No se han guardado los datos";
            }
        }
    }

    function guardar_perros(array $data){

        $fp = fopen("perros.txt", "a");

        if($fp){
            fputs($fp,"\n" . $data["nombre"]);
            fputs($fp,"\n" . $data["alergias"]);
            fputs($fp,"\n" . $data["perros"]);
            fputs($fp,"\n" . $data["nacimiento"]);
            fputs($fp,"\n" . $data["color"]);
            fputs($fp,"\n" . $data["pienso"]);
            fclose($fp);

            return true;
        }
        return false;
    }
    ?>

</head>

<body>
    <header>
        <h1>Don Canis Familiaris</h1><img src="img/descarga.png" alt="">
    </header>
    <section>
        <form action="" method="POST">
            <h2>Lavamos tu perro</h2>
            <div>
                <label for="nombre">Nombre </label>
                <input type="text" name="nombre" id="nombre" value="<?= $_POST["alergias"] ?? "" ?>">
                <div class="error"><?= $errores["nombre"] ?? "" ?></div>
            </div>

            <div>
                <label for="alergias">Alergias </label>
                <input type="text" name="alergias" id="alergias" value="<?= $_POST["alergias"] ?? "" ?>">
                <div class="error"><?= $errores["alergias"] ?? "" ?></div>
            </div>

            <div>
                <label for="perros">¿Cuantos perros tiene? </label>
                <input type="number" name="perros" id="perros" value="<?= $_POST["perros"] ?? "" ?>">
                <div class="error"><?= $errores["perros"] ?? "" ?></div>
            </div>

            <div>
                <label for="color">Color del perro </label>
                <select name="color" id="color">
                    <?php for ($x = 0; $x < count($colores); $x++) { ?>
                        <option value="<?= $colores[$x]; ?>" <?= isset($_POST["color"]) && $colores[$x] === $_POST["color"] ? "selected" : "" ?>>
                            <?= $colores[$x]; ?></option>
                    <?php } ?>
                </select>
                <div class="error"><?= $errores["color"] ?? "" ?></div>
            </div>

            <div>
                <label for="nacimiento">Fecha de nacimiento </label>
                <input type="date" name="nacimiento" id="nacimiento" value="<?= $_POST["nacimiento"] ?? "" ?>">
                <div class="error"><?= $errores["nacimiento"] ?? "" ?></div>
            </div>

            <div>
                <label>Marca que suele comer</label><br>

                <?php for ($x = 0; $x < count($pienso); $x++) { ?>
                    <label for="pienso<?= $x ?>"><?= $pienso[$x]; ?></label>
                    <input <?= isset($_POST["pienso"]) &&
                                estePienso($pienso[$x], $_POST["pienso"]) ? "checked" : "" ?> type="checkbox" name="pienso[]" id="pienso<?= $x ?>" value="<?= $pienso[$x]; ?>">
                    <br>
                <?php } ?>
                <div class="error"><?= $errores["pienso"] ?? "" ?></div>
            </div>

            <div>
                <input type="submit" value="Enviar" name="enviar">
            </div>

        </form>
    </section>


</body>

</html>

<!-- <style>
    header {
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: space-around;
        height: 80px;
        background-color: lightseagreen;
        padding: 5px 0px;
    }

    header img {
        height: 100%;
    }

    * {
        margin: 0px;
        padding: 0px;
    }

    form {
        width: 50%;
        background-color: lightyellow;
        padding: 5px 15px;
    }

    form div {
        margin-top: 5px;
    }

    label,
    input,
    select {
        font-size: 1.5em;
    }

    form h2 {
        width: 100%;
        text-align: center;
        text-shadow: #27ae60 2px 2px 2px;
    }

    .error {
        padding: 0;
        font-size: 1em !important;
        color: red;
    }

    section{
    width: 100%;
    height: calc(100vh - 80px);
    display: flex;
    align-items: center;
    justify-content: center;
    }
</style> -->