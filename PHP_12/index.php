<?php
$errores = [];
if (isset($_POST["registrar"])) {
    $ok = validarForm($_POST);
    if ($ok !== true) {
        $errores = $ok;
    } else {
        $good = guardarForm($_POST);
        if ($good) {
            header("location: datos_guardados.php");
        }
    }
}
function guardarForm(array $datos)
{
    $filename = "datos.txt";
    $fp = fopen($filename, "a");
    if ($fp) {
        $trat = $datos["tratamiento"] ?? "";
        fputs($fp, "\n" . $trat);
        fputs($fp, "\n" . $datos["nombre"]);
        fputs($fp, "\n" . $datos["apellidos"]);
        fputs($fp, "\n" . $datos["email"]);
        fputs($fp, "\n" .  $datos["pass"]);
        $day = $datos["dia"] ?? "";
        fputs($fp, "\n" . $day);
        $month = $datos["mes"] ?? "";
        fputs($fp, "\n" . $month);
        $year = $datos["anio"] ?? "";
        fputs($fp, "\n" . $year);

        $sus = isset($datos["suscribete"]) ? "true" : "false";
        fputs($fp, "\n" . $sus);
        $oferta = isset($datos["ofertas"]) ? "true" : "false";
        fputs($fp, "\n" . $oferta);

        fclose($fp);
        return true;
    }
    return false;
}

function validarForm(array $datos)
{
    $err = [];
    if (isset($datos["tratamiento"])) {
        $trata = $datos["tratamiento"];
        if ($trata !== "sr" && $trata !== "sra") {
            $err["tratamiento"] = "Escoja una opción válida.";
        }
    }

    $nombre = $datos["nombre"];
    if ($nombre === "") {
        $err["nombre"] = "Falta el nombre.";
    }
    $apellidos = $datos["apellidos"];
    if ($apellidos === "") {
        $err["apellidos"] = "Falta los apellidos.";
    }
    $email = $datos["email"];
    if ($email === "") {
        $err["email"] = "Falta el email.";
    } else if (!is_email($email)) {
        $err["email"] = "E-mail inválido.";
    }
    $pass = $datos["pass"];
    if ($pass === "") {
        $err["pass"] = "Falta la contraseña.";
    } else if (strlen($pass) < 5) {
        $err["pass"] = "Contraseña demasiado corta.";
    }

    $dia = $datos["dia"];
    $mes = $datos["mes"];
    $anio = $datos["anio"];
    if ($dia !== "-" && $mes !== "-" && $anio !== "-") {
        if (!checkdate($mes, $dia, $anio)) {
            $err["fecha"] = "La fecha no es válida.";
        }
    } else if (is_numeric($dia) || is_numeric($mes) || is_numeric($anio)) {
        $err["fecha"] = "Fecha incompleta.";
    }
    return empty($err) ? true : $err;
}

function is_email(String $str)
{
    $pos = stripos($str, "@");
    if ($pos === false) {
        return false;
    } else {
        $substr = substr($str, $pos + 1);
        $posPto = stripos($substr, ".");
        if ($posPto === false) {
            return false;
        }
    }
    return true;
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario 1</title>
    <link rel="stylesheet" href="estilos.css">
</head>

<body>
    <main class="main">
        <form action="" method="POST">
            <h1 class="form-title">Sus datos personales</h1>
            <p class="form-advice">*Campo requerido</p>
            <div class="form-field">
                <label class="form-label">Tratamiento</label>
                <div>
                    <input <?= isset($_POST["tratamiento"]) && $_POST["tratamiento"] === "sr" ? "checked " : "" ?> type="radio" name="tratamiento" id="sr" value="sr">
                    <label for="sr" class="form-label">Sr.</label>
                    <input <?= isset($_POST["tratamiento"]) &&  $_POST["tratamiento"] === "sra" ? "checked " : "" ?> type="radio" name="tratamiento" id="sra" value="sra">
                    <label for="sra" class="form-label">Sra.</label>
                </div>
                <p class="form-error"><?= $errores["tratamiento"] ?? "" ?></p>
            </div>
            <div class="form-field">
                <label class="form-label" for="nombre">Nombre *</label>
                <input value="<?= $_POST["nombre"] ?? "" ?>" class="form-input-text" type="text" name="nombre" id="nombre">
                <p class="form-error"><?= $errores["nombre"] ?? "" ?></p>
            </div>
            <div class="form-field">
                <label class="form-label" for="apellidos">Apellidos *</label>
                <input value="<?= $_POST["apellidos"] ?? "" ?>" calss="form-input-text" type="text" name="apellidos" id="apellidos">
                <p class="form-error"><?= $errores["apellidos"] ?? "" ?></p>
            </div>
            <div class="form-field">
                <label class="form-label" for="email">Dirección de correo electrónico *</label>
                <input value="<?= $_POST["email"] ?? "" ?>" type="email" name="email" id="email" placeholder="test2@test.com">
                <p class="form-error"><?= $errores["email"] ?? "" ?></p>
            </div>
            <div class="form-field">
                <label class="form-label" for="pass">Contraseña *</label>
                <input value="<?= $_POST["pass"] ?? "" ?>" type="password" name="pass" id="pass">
                <p class="form-help">(Mínimo 5 caracteres)</p>
                <p class="form-error"><?= $errores["pass"] ?? "" ?></p>
            </div>
            <div class="form-field">
                <label class="form-label">Fecha de nacimiento</label>
                <div>
                    <select name="dia">
                        <option value="-" <?= isset($_POST["dia"]) &&  $_POST["dia"] === "-" ? "selected " : "" ?>>-</option>
                        <?php for ($i = 1; $i <= 31; $i++) { ?>
                            <option <?= isset($_POST["dia"]) &&  $_POST["dia"] == $i ? "selected " : "" ?> value="<?= $i ?>"><?= $i ?></option>
                        <?php } ?>
                    </select>
                    <select name="mes">
                        <option <?= isset($_POST["mes"]) &&  $_POST["mes"] === "-" ? "selected " : "" ?> value="-">-</option>
                        <?php for ($i = 1; $i <= 12; $i++) { ?>
                            <option <?= isset($_POST["mes"]) &&  $_POST["mes"] == $i ? "selected " : "" ?> value="<?= $i ?>"><?= $i ?></option>
                        <?php } ?>
                    </select>
                    <select name="anio">
                        <option <?= isset($_POST["anio"]) &&  $_POST["anio"] === "-" ? "selected " : "" ?> value="-">-</option>
                        <?php for ($i = 1900; $i <= 2021; $i++) { ?>
                            <option <?= isset($_POST["anio"]) &&  $_POST["anio"] == $i ? "selected " : "" ?> value="<?= $i ?>"><?= $i ?></option>
                        <?php } ?>
                    </select>
                    <p class="form-error"><?= $errores["fecha"] ?? "" ?></p>
                </div>
            </div>
            <div class="form-field-chk">
                <input <?= isset($_POST["suscribete"]) ? "checked " : "" ?> class="form-input-chk" type="checkbox" name="suscribete" id="suscribete">
                <label class="form-chk-label" for="suscribete">¡Suscríbase a nuestro boletín de noticias!</label>
            </div>
            <div class="form-field-chk">
                <input <?= isset($_POST["ofertas"]) ? "checked " : "" ?> class="form-input-chk" type="checkbox" name="ofertas" id="ofertas">
                <label class="form-chk-label" for="ofertas">¡Reciba ofertas especiales de nuestros socios!</label>
            </div>
            <div>
                <button name="registrar" class="btn" type="submit">Registrarse ></button>
            </div>
        </form>
    </main>
</body>

</html>