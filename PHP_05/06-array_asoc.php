<?php

// ARRAY ASOCIATIVO

$asoc = [
    "nombre" => "Pepe",
    "edad" => 25,
    "direccion" => [
        "calle" => "C/ perico",
        "numero" => 25
    ]
];

$pilar = [
    "nombre" => "Pilar",
    "edad" => 25,
    "direccion" => [
        "calle" => "C/ perico",
        "numero" => 25
    ]
];
echo "<br>";
echo $pilar["direccion"]["calle"];
echo "<br>";
$personas = [$asoc, $pilar];
// var_dump($asoc);
echo $personas[1]["nombre"];
