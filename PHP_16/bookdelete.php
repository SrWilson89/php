<?php

include "bbdd_book.php";

if(isset($_GET["id"])){
    $id=$_GET["id"];
    try{
    $good=deleteBook($id);
    if($good){
        header('location: index.php');
    }else{
        echo "No se ha podido eliminar";
    }} catch(Exception $e){
        if($e->getCode()===23000){
            echo "El libro no se puede eliminar. Esta prestado";
        }else{
            echo "Exception: ". $e->getMessage();
        }
    }
}else{
    header('location: index.php');
}

?>