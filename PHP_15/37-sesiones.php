<?php
    $msg = "";
    $msgClass = "";

    if (isset($_POST["login"])) {

        if (isLoginValid($_POST)) {
            if (existeUsuario($_POST)) {
                $msgClass = "success";
                $msg = "Acceso permitido.";
                session_start();//importante
                $_SESSION["autenticado"] = TRUE;
                $_SESSION["nombre"] = $_POST["user"];
                header("Location: 37-sesiones_inicio.php");
            } else {
                $msgClass = "error";
                $msg = "El usuario o la contraseña son incorrectos.";
            }
        } else {
            $msgClass = "error";
            $msg = "Debe introducir el usuario y la contraseña.";
        }
    }

    function isLoginValid($login) {
        foreach ($login as $value) {
            if ($value == "") return false;
        }
        return true;
    }

    function existeUsuario($user) {
        $usuarios = [
            ["user"=> "Felipe", "pass" => "111111"],
            ["user"=> "Manolo", "pass" => "222222"],
            ["user"=> "Ana", "pass" => "333333"],
        ];

        foreach ($usuarios as $usuario) {
            if ($usuario["user"] == $user["user"] AND 
                $usuario["pass"] == $user["pass"]) {
                return true;
            }
        }
        return false;
    }
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sesion</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <style type="text/css">
        *{
            font-size: 14px;
        }
        form.encuenta {
            background-color: #F1F1F1;
            border: 1px solid #DDDDDD;
            font-family: sans-serif;
            margin: 0 auto;
            padding: 20px;
            width: 350px;
        }
        form.encuenta div {
            margin-bottom: 15px;
            overflow: hidden;
        }
        form.encuenta div label {
            display: block;
            line-height: 25px;
        }
        form.encuenta div input[type="text"], form.encuenta div input[type="password"] {
            border: 1px solid #DCDCDC;
            padding: 4px;
            width: 100%;
        }
        form.encuenta div.radio {
            display: inline;
            padding: 4px;
        }
        form.encuenta textarea {
            padding: 4px;
            width: 100%;
        }
        form.encuenta div input[type="submit"] {
            background-color: #DEDEDE;
            border: 1px solid #C6C6C6;
            font-weight: bold;
            padding: 4px 20px;
        }
        .error{
            color: red;
            font-weight: bold;
            margin: 10px;
            text-align: center;
        }
        .success{
            color: green;
            font-weight: bold;
            margin: 10px;
            text-align: center;
        }
    </style>
</head>
<body>
        <form action="" method="post" class="encuenta">
            <div>
                <label>Usuario</label>
                <input type="text" name="user">
            </div>
            <div>
                <label>Contraseña</label>
                <input type="password" name="pass">
            </div>            
            <div><input name="login" type="submit" value="Iniciar Sesión"></div>
        </form>
        <div class="<?= $msgClass ?>"> <?= $msg ?> </div>
</body>
</html>