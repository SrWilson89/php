<?php
/*
EJERCICIO 8
Crear las clases necesarias para modelar una empresa de alquiler de
coches. (coches, clientes). Un cliente debe poder alquilar o devolver un
coche.
*/
include_once "Alquiler.php";

$cli = new Cliente("123455678A", "Pepe", "Garcia", "C/ Alvarado", "2000-01-11", "925112233");

$coches = [
    new Coche("Audi", "AA", "1234kjl", 3, 10, 10),
    new Coche("Citroen", "bb", "2345kjl", 5, 15, 5),
    new Coche("Mercedes", "ff", "6543kjl", 5, 20, 20),
];
$fecha = getdate();
// var_dump($fecha);
$strFecha = $fecha["year"] . "-" . $fecha["mon"] . "-" . $fecha["mday"];
$alq = new Alquiler($strFecha, $coches[1], $cli);

$alq->terminarAlquiler("2021-10-01");

$alq->escribirInfo();


$coches[] = new Coche("Toyota", "RR", "1111aaa", 2, 50, 15);

array_push(
    $coches,
    new Coche("Hyundai", "TT", "2222AAA", 3, 30, 30)
);

listarCoches($coches);

function listarCoches(array $coches)
{
    echo "<h3>LISTA DE COCHES</h3>";
    for ($i = 0; $i < count($coches); $i++) {
        echo "$i - ";
        echo $coches[$i]->escribirInfo();
    }
}
