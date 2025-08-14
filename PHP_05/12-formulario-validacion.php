<?php
include "12-funcion-validar.php";

$errores = [];
if (isset($_POST["enviar"])) {
    $res = validaFormulario($_POST);
    if ($res === true) {
        echo "Todo correcto.";
    } else {
        $errores = $res;
    }
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
</head>
<style>
    .rojo {
        color: red;
    }
</style>

<body>
    <h3>Formulario de registro</h3>
    <form action="" method="POST">
        <div>
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" id="nombre" value="<?= $_POST["nombre"] ?? "" ?>">
            <div class="rojo">
                <?php echo isset($errores["nombre"])
                    ? $errores["nombre"]
                    : "" ?>
            </div>
        </div>
        <div>
            <label for="apellidos">Apellidos</label>
            <input type="text" name="apellidos" id="apellidos" value="<?= $_POST["apellidos"] ?? "" ?>">
            <div class="rojo">
                <?php echo isset($errores["apellidos"])
                    ? $errores["apellidos"]
                    : "" ?>
            </div>
        </div>
        <div>
            <label for="direccion">Direccion</label>
            <input type="text" name="direccion" id="direccion" value="<?= $_POST["direccion"] ?? "" ?>">
        </div>
        <div>
            <label for="codigoPostal">Codigo Postal</label>
            <input type="text" name="codigoPostal" id="codigoPostal" value="<?= $_POST["codigoPostal"] ?? "" ?>">
            <div class="rojo">
                <?php echo isset($errores["codigoPostal"])
                    ? $errores["codigoPostal"]
                    : "" ?>
            </div>
        </div>
        <div>
            <label for="ciudad">Ciudad</label>
            <input type="text" name="ciudad" id="ciudad" value="<?= $_POST["ciudad"] ?? "" ?>">
        </div>
        <div>
            <label>Pais</label>
            <select name="pais" id="pais">
                <option value="España" <?= isset($_POST["pais"]) && $_POST["pais"] === "España" ? "selected" : "" ?>>
                    España
                </option>
                <option value="Francia" <?= isset($_POST["pais"]) && $_POST["pais"] === "Francia" ? "selected" : "" ?>>Fracia</option>
                <option value="Portugal" <?= isset($_POST["pais"]) && $_POST["pais"] === "Portugal" ? "selected" : "" ?>>Portugal</option>
            </select>
        </div>
        <div>
            <label for="edad">Edad</label>
            <input type="number" name="edad" id="edad" value="<?= $_POST["edad"] ?? "" ?>">
            <div class="rojo">
                <?php echo isset($errores["edad"])
                    ? $errores["edad"]
                    : "" ?>
            </div>
        </div>
        <div>
            <label for="desempleado">¿ Si esta desempleado ?</label>
            <input type="checkbox" name="desempleado" id="desempleado" value="si" <?= isset($_POST["desempleado"]) ? "checked" : "" ?>>
        </div>
        <div>
            <input name="enviar" type="submit" value="Enviar">
        </div>
    </form>
</body>

</html>