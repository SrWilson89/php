<?php
include "bbdd_user.php";

if (isset($_POST["registro"])) {
    $ok = validarRegistroForm($_POST);
    if ($ok === true) {
        $good = saveUser($_POST);
        header("location: login.php");
    }
}

function validarRegistroForm(array $data)
{
    return true;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="estilos.css">
</head>

<body>
    <h1>Registro</h1>
    <form action="" method="POST">
        <div>
            <label for="usuario">Usuario</label>
            <input type="text" name="usuario" id="usuario">
        </div>
        <div>
            <label for="password">Contraseña</label>
            <input type="password" name="password" id="password">
        </div>
        <div>
            <label for="password2">Repite la contraseña</label>
            <input type="password" name="password2" id="password2">
        </div>
        <div>
            <label for="email">Correo electrónico</label>
            <input type="text" name="email" id="email">
        </div>
        <div>
            <input type="submit" value="registrase" name="registro">
        </div>
    </form>

</body>

</html>