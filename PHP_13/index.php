<?php

$asignatura = ["HTML", "CSS", "JavaScrip"];
$jugadores =["Cristiano","Messi","Chigrinsky","Sergio Ramos","Svevchenko"];

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
    $filename = "encuesta.txt";
    $fp = fopen($filename, "a");
    if ($fp) {
        fputs($fp, "\n" . $datos["nombre"]);
        fputs($fp, "\n" . $datos["apellidos"]);
        fputs($fp, "\n" . $datos["email"]);
        $val = $datos["valoracion"] ?? "";
        fputs($fp, "\n" . $val);
        $html = isset($datos["HTML"]) ? "true" : "false";
        fputs($fp, "\n" . $html);
        $css = isset($datos["CSS"]) ? "true" : "false";
        fputs($fp, "\n" . $css);
        $js = isset($datos["JavaScrip"]) ? "true" : "false";
        fputs($fp, "\n" . $js);
        $jugadores = $datos["jugadores"] ?? "";
        fputs($fp, "\n" . $jugadores);
        fputs($fp,"\n" . $datos["mejoras"]);
        fputs($fp,"\n>>> FIN MEJORAS <<<");
        fclose($fp);
        return true;
    }
    return false;
}

function validarForm(array $datos)
{
    $err = [];

    $nombre = $datos["nombre"];
    if ($nombre === "") {
        $err["nombre"] = "Falta el nombre.";
    }
    $apellidos = $datos["apellidos"];
    if ($apellidos === "") {
        $err["apellidos"] = "Faltan los apellidos.";
    }
    $email = $datos["email"];
    if ($email === "") {
        $err["email"] = "Falta el email.";
    } else if (!is_email($email)) {
        $err["email"] = "E-mail inválido.";
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

function estaAsignatura($asignatura, array $data){
    $x = 0;
    $encontrado = false;
    while ($x < count($data) && !$encontrado) {
        if ($data[$x] === $asignatura) {
            $encontrado = true;
        }
        $x++;
    }
    return $encontrado;
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="shortcut icon" href="img/ico9.jpg" type="image/x-icon">
    <link rel="stylesheet" href="css/style.css">

</head>

<body>
<form action="" method="POST">
            <div class="form-field">
                <label class="form-label" for="nombre">Nombre: *</label>
                <input value="<?= $_POST["nombre"] ?? "" ?>" class="form-input-text" type="text" name="nombre" id="nombre">
                <p class="form-error"><?= $errores["nombre"] ?? "" ?></p>
            </div>
            <div class="form-field">
                <label class="form-label" for="apellidos">Apellidos: *</label>
                <input value="<?= $_POST["apellidos"] ?? "" ?>" calss="form-input-text" type="text" name="apellidos" id="apellidos">
                <p class="form-error"><?= $errores["apellidos"] ?? "" ?></p>
            </div>
            <div class="form-field">
                <label class="form-label" for="email">Email: *</label>
                <input value="<?= $_POST["email"] ?? "" ?>" type="email" name="email" id="email" placeholder="test2@test.com">
                <p class="form-error"><?= $errores["email"] ?? "" ?></p>
            </div>
            <div class="form-field">
                <label class="form-label" for="valoracion">¿Que valoracion le das a la publicacion?</label>
                <div>
                    <input <?= isset($_POST["valoracion"]) && $_POST["valoracion"] === "0" ? "checked " : "" ?> type="radio" name="valoracion" id="0" value="0">
                    <label for="0">0</label>

                    <input <?= isset($_POST["valoracion"]) && $_POST["valoracion"] === "1" ? "checked " : "" ?> type="radio" name="valoracion" id="1" value="1">
                    <label for="1">1</label>

                    <input <?= isset($_POST["valoracion"]) && $_POST["valoracion"] === "2" ? "checked " : "" ?> type="radio" name="valoracion" id="2" value="2">
                    <label for="2">2</label>

                    <input <?= isset($_POST["valoracion"]) && $_POST["valoracion"] === "3" ? "checked " : "" ?> type="radio" name="valoracion" id="3" value="3">
                    <label for="3">3</label>

                    <input <?= isset($_POST["valoracion"]) && $_POST["valoracion"] === "4" ? "checked " : "" ?> type="radio" name="valoracion" id="4" value="4">
                    <label for="4">4</label>

                    <input <?= isset($_POST["valoracion"]) && $_POST["valoracion"] === "5" ? "checked " : "" ?> type="radio" name="valoracion" id="5" value="5">
                    <label for="5">5</label>
                </div>
                <p class="form-error"><?= $errores["valoracion"] ?? "" ?></p>
            </div>
            <div class="form-field">
                <label class="form-label">¿Que asignatura has estudiado?</label>
                <div>
                    <?php for ($x = 0; $x < count($asignatura); $x++) { ?>
                        <input <?= isset($_POST["asignatura"]) && estaAsignatura($asignatura[$x], $_POST["asignatura"]) ? "checked" : "" ?> type="checkbox" name="asignatura[]" id="<?= $asignatura[$x]?>" value="<?= $asignatura[$x]; ?>">
                        <label for="<?= $asignatura[$x]?>"><?= $asignatura[$x]; ?></label>
                    <?php } ?>
                    <p class="form-error"><?= $errores["asignatura"] ?? "" ?></p>
                </div>
            </div>
            <div class="form-field-chk">
                <label class="form-label">Selecciona tu jugador favorito</label><br>
                <select name="jugadores">
                    <?php for ($x = 0; $x <count($jugadores); $x++) { ?>
                        <option <?= isset($_POST["jugadores"]) &&
                        $_POST["jugadores"] == $jugadores[$x] ? "selected " : "" ?>
                        value="<?= $x ?>"><?= $jugadores[$x]; ?></option>
                    <?php } ?>
                </select>
                <p class="form-error"><?= $errores["jugadores"] ?? "" ?></p>
            </div>
            <div class="form-field-chk">
                <label class="form-label">¿Que mejorarias de este curso?</label><br>
                <textarea name="mejoras" id="mejoras" cols="30" rows="10">
                    <?= $_POST["mejoras"] ?? "" ?>
                </textarea>
            </div>
            <div>
                <button name="registrar" class="btn" type="submit">Enviar</button>
            </div>
        </form>
</body>
</html>

