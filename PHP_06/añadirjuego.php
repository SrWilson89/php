<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="shortcut icon" href="img/ico9.jpg" type="image/x-icon">
    <link rel="stylesheet" href="css/style2.css">

    <?php

        include "funciones.php";

        $errores = [];

        if (isset($_POST["enviar"])) {

            var_dump($_FILES);

            $ok = validarForm($_POST);
            if ($ok === true) {
                
                $name="";
                if($_FILES["portada"]["name"] !== ""){
                    $tmp = $_FILES["portada"]["tmp_name"];
                    $name= $_FILES["portada"]["name"];                    
                    move_uploaded_file($tmp, "img/" . $name);                    
                }
                $game=[
                    "titulo"=>$_POST["titulo"],
                    "lanzamiento"=>$_POST["lanzamiento"],
                    "productora"=>$_POST["productora"],
                    "descripcion"=>$_POST["descripcion"],
                    "portada"=>$name
                ];

                $ok=guardar_videojuegos($game);

                if($ok){
                    header("location: index.php");
                }else{
                    echo "No se han guardado los datos";
                }

            }else{
                $errores = $ok;
            }
        }

        function guardar_videojuegos(array $data){

            $fp = fopen("juegos.txt", "a");

            if($fp){
                fputs($fp,"\n" . $data["titulo"]);
                fputs($fp,"\n" . $data["lanzamiento"]);
                fputs($fp,"\n" . $data["productora"]);
                fputs($fp,"\n" . $data["descripcion"]);
                fputs($fp,"\n>>> FIN DESCRIPCION <<<");
                fputs($fp,"\n" . $data["portada"]);
                fclose($fp);

                return true;
            }
            return false;
        }

    ?>

</head>

<body>

    <form action="" method="POST" enctype="multipart/form-data">
        <div>
            <label for="titulo">Titulo *: </label>
            <input type="text" name="titulo" id="titulo" value="<?=$_POST["titulo"] ?? "" ?>">
            <div class="error"><?= $errores["titulo"] ?? "" ?></div>
        </div>

        <div>
            <label for="lanzamiento">Año de Lanzamiento </label>
            <input type="number" name="lanzamiento" id="lanzamiento" value="<?=$_POST["lanzamiento"] ?? "" ?>">
            <div class="error"><?= $errores["lanzamiento"] ?? "" ?></div>
        </div>

        <div>
            <label for="productora">Productora </label>
            <input type="text" name="productora" id="productora" value="<?=$_POST["productora"] ?? "" ?>">
            <div class="error"><?= $errores["productora"] ?? "" ?></div>
        </div>        

        <div>
            <label for="descripcion">Descripcion</label><br>
            <textarea name="descripcion" id="" cols="30" rows="10" 
            ><?=$_POST["descripcion"] ?? "" ?></textarea>
            <div class="error"><?= $errores["descripcion"] ?? "" ?></div>
        </div>

        <div>
            <label for="portada">Portada: </label>
            <input type="file" name="portada" id="portada">
            <div class="error"><?= $errores["portada"] ?? "" ?></div>
        </div>        

        <div>
            <input type="submit" value="Enviar" name="enviar">
        </div>


    </form>
    <a href="index.php">Indice Juegos</a>
</body>

</html>