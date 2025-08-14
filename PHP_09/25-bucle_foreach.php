<?php
    /*
        foreach(array as $valor) {
            sentencias;
        }

        foreach(array as $clave => $valor) {
            sentencias;
        }
    */
    echo '<br>';
    $array = [1,2,3,4,5,6,7,8,9,10];
    echo 'FOREACH_1: ';
    foreach($array as $valor) {
        echo "$valor, ";
    }

    echo '<br>';
    echo 'FOREACH_2: ';
    foreach($array as $clave => $valor) {
        echo "$clave => $valor, ";
    }

    $meses=[
        "enero"=>31,"febrero"=>28,
        "marzo"=>31,"abril"=>30,
        "mayo"=>31,"junio"=>30,
        "julio"=>31,"agosto"=>31,
        "septiembre"=>30,"octubre"=>31,
        "noviembre"=>30,"diciembre"=>31
    ];

    echo '<br>';
    echo 'FOREACH_3<br>';
    foreach($meses as $clave => $valor) {
        echo "$clave => $valor, <br>";
    }