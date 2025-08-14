<!DOCTYPE html>
<html lang="en">
<?php
    $datos= leerDatos();

    function leerDatos(){
        $datos=[];
        $file="datos.txt";
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
</head>
<body>

    <h1>Datos enviados correctamente</h1>

    <div>
        <?php
        for($i=0; $i< count($datos);$i++){
            echo "$datos[$i] <br>";
        }
        ?>
    </div>
    
</body>
</html>