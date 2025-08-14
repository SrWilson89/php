<?php

include "funciones.php";

if(isset($_GET['delete'])){
    $dogs=leer_perros();
    $pos =$_GET['delete'];
    array_splice($dogs, $pos, 1);
}else{
    echo "Error. No se ha especificado elemento a eliminar.<br>";
    echo "<a href='index.php'>Volver</a>";
}