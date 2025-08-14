<!DOCTYPE html>
<html lang="es">
<?php

if(isset($_GET["login"])){
    $user=$_GET["user"];
    $pass=$_GET["pasword"];

    if($user=="Admin" && $pass="1234"){
        echo "Tienes acceso puedes pasar";
    }
}

?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="shortcut icon" href="ico9.jpg" type="image/x-icon">
</head>
<body>

<form action="" method="GET">
    <label for="">Usuario</label>
    <input type="text" name="user" id="user">

    <label for="">Contraseña</label>
    <input type="password" name="pasword" id="pasword">

    <input type="submit" value="Login" name="login">
</form>

</body>
</html>