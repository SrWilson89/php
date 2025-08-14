<?php

namespace Ejercicio201;

include "Punto.php";
include "Forma.php";
include "Rectangulo.php";

try {

$pto = new Punto(1, 1);

$forma = new Forma("Azul", $pto, "Esmeralda");
$forma->imprimir();
$forma->mover(5, 5);
echo "<hr>";
$forma->imprimir();
echo $forma->getColor() . "<br>";
$forma->setColor("Verde");
echo $forma->getColor() . "<br>";
echo "<hr>";

$rect = new Rectangulo(
    "Rojo",
    new Punto(2, 2),
    "Popi",
    3,
    5
);
$rect->imprimir();
echo "<hr>";
echo "Area: " . $rect->area() . "<br>";
echo "Perimetro: " . $rect->perimetro() . "<br>";
echo "<hr>";
$rect->escalar(0.5);
$rect->imprimir();
echo "<hr>";
$rect->escalar(2);
$rect->imprimir();
echo "<hr>";
$forma= new Forma("",new Punto(1, 1),"");
}catch(\Exception $e){
    echo "Forma Excepcion: " . $e->getMessage();
}catch(\Exception $e){
    echo "Excepcion: " . $e->getMessage();
}catch(\Error $err){
    echo "Error: " . $err->getMessage();
}