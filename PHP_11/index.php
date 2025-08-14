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

    $errores = [];

    if(isset($_POST["registrar"])){
        $ok=validarForm($_POST);
        if($ok !== true){
            $errores=$ok;
        }else{

        }
    }

    $tratamiento = ["Sr", "Sra"];
    $ofertas = ["¡Suscribase a nuestro boletin de noticias!", "¡Reciba ofertas especiales de nuestros socios!"];


?>
<style>
    .pasword{
        color: grey;
    }

    body{
        width: 100%;
        height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    form{
        width: 40vw;
        height: fit-content;
        padding: 5px 15px;
        background-color: lemonchiffon;
        border: 5px double black;
        border-radius: 15px;
    }

    div button{
        padding: 5px 15px;
        background-color: lightseagreen;
        color: white;
        font-weight: bolder;
    }

    form div{
        margin-bottom: 5px;
    }

    .error {
    padding: 0;
    font-size: 1em !important;
    color: red;
    font-weight: bolder;
    }

    hr{
	border-top: 3px double #333;
    }
</style>

</head>
<body>
    <form action="" method="POST">
        <h1>SUS DATOS PERSONALES</h1>
        <hr>

        <div>
            <label>Tratamiento</label><br>
            <input type="radio" name="tratamiento" id="sr">
            <label for="sr">Sr</label>
            <input type="radio" name="tratamiento" id="sra">
            <label for="sra">Sra</label>
            <div class="error"><?= $errores["tratamiento"] ?? "" ?></div>
        </div>

        <div>
            <label for="nombre">Nombre: </label><br>
            <input type="text" name="nombre" id="nombre" value="<?=$_POST["nombre"] ?? "" ?>">
            <div class="error"><?= $errores["nombre"] ?? "" ?></div>
        </div>

        <div>
            <label for="apellidos">Apellidos: </label><br>
            <input type="text" name="apellidos" id="apellidos" value="<?=$_POST["apellidos"] ?? "" ?>">
            <div class="error"><?= $errores["apellidos"] ?? "" ?></div>
        </div>

        <div>
            <label for="email">Email : </label><br>
            <input type="email" name="email" id="email" value="<?=$_POST["email"] ?? "" ?>">
            <div class="error"><?= $errores["email"] ?? "" ?></div>
        </div>

        <div>
            <label for="password">Contraseña: </label><br>
            <input type="text" name="password" id="password" value="<?=$_POST["password"] ?? "" ?>">
            <div class="pasword">Minimo 5 caracteres</div>
            <div class="error"><?= $errores["password"] ?? "" ?></div>
        </div>
        <div>
            <label for="fnacimiento">Fecha de nacimiento: </label><br>

            <select name="dia" id="dia">
                <option value="-" selected disabled> - </option>
                <?php for ($x = 1; $x <= 31; $x++) { ?>
                    <option value="<?= $x; ?>"

                    <?=isset($_POST["dia"]) && $x ===$_POST["dia"] ? "selected": ""?>>
                        <?php if($x<10){ ?>
                        0<?= $x; ?></option>
                        <?php }else{ ?>
                            <?= $x; ?></option>
                        <?php } ?>
                <?php } ?>
            </select>

            <select name="mes" id="mes">
                <option value="-" selected disabled> - </option>
                <?php for ($x = 1; $x <= 12; $x++) { ?>
                    <option value="<?= $x; ?>"
                    <?=isset($_POST["mes"]) && $x ===$_POST["mes"] ? "selected": ""?>>
                        <?php if($x<10){ ?>
                        0<?= $x; ?></option>
                        <?php }else{ ?>
                            <?= $x; ?></option>
                        <?php } ?>
                <?php } ?>
            </select>

            <select name="year" id="year">
                <option value="-" selected disabled> - </option>
                <?php for ($x = 1900; $x <= 2021; $x++) { ?>
                    <option value="<?= $x; ?>"
                    <?=isset($_POST["year"]) && $x ===$_POST["dia"] ? "selected": ""?>>
                        <?= $x; ?></option>
                <?php } ?>
            </select>
        </div>

        <div>

            <?php for ($x = 0; $x < count($ofertas); $x++) { ?>
                <input <?= isset($_POST["ofertas"]) &&
                estaOferta($ofertas[$x], $_POST["ofertas"]) ? "checked": "" ?>
                type="checkbox" name="ofertas[<?= $x ?>]" id="ofertas<?= $x ?>" value="<?= $ofertas[$x]; ?>">
                <label for="ofertas<?= $x ?>"><?= $ofertas[$x]; ?></label>
                <br>
            <?php } ?>
            <div class="error"><?= $errores["ofertas"] ?? "" ?></div>
        </div>
        <div>
            <input type="submit" value="Registrarse" name="registrar">
        </div>

    </form>


</body>
</html>

<?php

?>