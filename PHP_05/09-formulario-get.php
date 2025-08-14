<!DOCTYPE html>
<html lang="es">
<?php
if (isset($_GET["login"])) {
    $usr = $_GET["usuario"];
    $pass = $_GET["password"];

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
    <form action="" method="GET">
        <label for>Usuario</label>
        <input name="usuario" type="text" id="usr">

        <label>Contraseña</label>
        <input name="password" type="password">

        <input name="login" type="submit" value="Login">
    </form>
</body>

</html>