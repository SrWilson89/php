<!DOCTYPE html>
<html lang="es">
<?php
var_dump($_POST);
if (isset($_POST["login"])) {
    $usr = $_POST["usuario"];
    $pass = $_POST["password"];

    if ($usr === "admin" && $pass === "1234") {
        echo "Tienes acceso. Puedes pasar";
    }
}
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario GET</title>
</head>

<body>
    <form action="" method="POST">
        <label for>Usuario</label>
        <input name="usuario" type="text" id="usr">

        <label>Contraseña</label>
        <input name="password" type="password">

        <input name="login" type="submit" value="Login">
    </form>
</body>

</html>