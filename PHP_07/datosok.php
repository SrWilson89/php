<!DOCTYPE html>
<html lang="es">
<?php
    $dogs=leer_perros();

    function leer_perros(){
        $perros=[];
        $file="perros.txt";
        if(file_exists($file)){
            $fp = fopen($file,"r");
            if($fp){
                fgets($fp);
                do{
                    $dog =[];
                    $dog["nombre"]= fgets($fp);
                    $dog["alergias"]= fgets($fp);
                    $dog["perros"]= fgets($fp);
                    $dog["nacimiento"]= fgets($fp);
                    $dog["color"]= fgets($fp);
                    $dog["pienso"]= fgets($fp);
                    $perros[]=$dog;
                }while(!feof($fp));
                fclose($fp);
            }
        }
        return $perros;
    }

    $datos= leerDatos();

        function leerDatos(){
            $datos=[];
            $file="perros.txt";
            if(file_exists($file)){
                $fp= fopen($file, "r");
                if($fp){
                    while($fila = fgets($fp)){
                        $datos[]=$fila;
                    };
                fclose($fp);
                }
            }
        return $datos;
        }
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="shortcut icon" href="img/ico9.jpg" type="image/x-icon">
    <link rel="stylesheet" href="css/style2.css">
</head>
<body>

    <header>
        <h1>Listado de perros para lavar</h1><a href="index.php"><img src="img/descarga.png" alt=""></a>
    </header>

    <main>

        <?php for ($i = 0; $i < count($dogs); $i++) { ?>
            <div class="perros">
                <h4>Nombre: <?= $dogs[$i]["nombre"] ?></h4>
                <hr>
                <div>Alergias: <?= $dogs[$i]["alergias"] ?></div>
                <div>Nº de perros: <?= $dogs[$i]["perros"] ?></div>
                <div>Nacimiento: <?= $dogs[$i]["nacimiento"] ?></div>
                <div>Color del perro: <?= $dogs[$i]["color"] ?></div>
                <div>Comidas recomendadas: <?= $dogs[$i]["pienso"] ?></div>
                <div><a href="delete_dog.php?delete=<?$i?>">Eliminar</a></div>
            </div>
        <?php } ?>
    </main>



    <a href="index.php">Volver inicio</a>

</body>
</html>