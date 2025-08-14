<!DOCTYPE html>
<html lang="en">
<?php

include "funcion-validar.php";

$errores=[];

if(isset($_POST["login"])){    
    $res = validarFormulario($_POST);
    if($res===true){
        echo "Todo correcto";
    }else{
        $errores=$res;
    }
}
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <h2>Formulario de registro</h2>
    <form action="" method="POST">
        <label for="nombre">Nombre: </label>
        <input type="text" name="nombre" id="nombre" value="<?=$_POST["nombre"] ?? "" ?>">
        <!--                         version corta de ternario    ^arriba^     -->
        <div class="rojo">
            <?php
                echo isset($errores["nombre"]) 
                ?$errores["nombre"]
                :""  
            ?>
        </div>
        <br>
        
        <label for="apellidos">Apellidos: </label>
        <input type="text" name="apellidos" id="apellidos" value="<?=$_POST["apellidos"] ?? "" ?>">
        <div class="rojo">
            <?php
                echo isset($errores["apellidos"]) 
                ?$errores["apellidos"]
                :""  
            ?>
        </div>
        <br>
        <label for="dir">Direccion: </label><input type="text" name="dir" id="dir" value="<?=$_POST["dir"] ?? "" ?>">
        <br><br>
        <label for="cp">Codigo postal: </label><input type="text" name="cp" id="cp" value="<?=$_POST["cp"] ?? "" ?>">
        <div class="rojo">
            <?php
                echo isset($errores["cp"]) 
                ?$errores["cp"]
                :""  
            ?>
        </div>
        <br>
        <label for="ciudad">Ciudad: </label><input type="text" name="ciudad" id="ciudad" value="<?=$_POST["ciudad"] ?? "" ?>">
        <br><br>
        <label>Ciudad: </label>
            <select name="pais" id="pais">
                <option value="España" 
                <?= isset($_POST["pais"]) && $_POST["pais"]==="España" ? "selected": "" ?> 
                >España</option>

                <option value="Francia" 
                <?= isset($_POST["pais"]) && $_POST["pais"]==="Francia" ? "selected": "" ?>
                >Francia</option>

                <option value="Portugal" 
                <?= isset($_POST["pais"]) && $_POST["pais"]==="Portugal" ? "selected": "" ?>
                >Portugal</option>
            </select>
        <br><br>
        <label for="edad">Edad: </label><input type="number" name="edad" id="edad" value="<?=$_POST["edad"] ?? "" ?>">
        <div class="rojo">
            <?php
                echo isset($errores["edad"]) 
                ?$errores["edad"]
                :""  
            ?>
        </div>
        <br>
        <label for="desempleado">¿Esta desempleado? </label>
        <input type="checkbox" name="desempleado" id="desempleado" value="si" <?= 
            isset($_POST["desempleado"]) ? "checked":"" 
        ?>>
        <br><br>
        <input type="submit" value="Login" name="login" class="boton">
    </form>

</body>
</html>

