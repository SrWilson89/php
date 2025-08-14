<?php

if(isset($_POST["login"])){
    $user=$_POST["user"];
    $pass=$_POST["pasword"];

    if($user==="Admin" && $pass==="1234"){
        echo "Tienes acceso puedes pasar";
    }else{
        var_dump($_POST);
    }
}

?>