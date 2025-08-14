<?php
// EJERCICIO 4
include "Vehiculo.php";
include "AutoCompacto.php";
include "AutoDeLujo.php";
include "Camioneta.php";
include "Vagoneta.php";

$vehiculo = new Vehiculo("111", "Audi", 2000, 10);
$compacto = new AutoCompacto("222", "Mercedes", 2010, 15, 5);
$lujo = new AutoDeLujo("333", "Porche", 2020, 50, 2);
$vago = new Vagoneta("444", "Renault", 1999, 5, 6);
$camioneta = new Camioneta("555", "Peugeot", 2009, 3, 1000, 2, 1000);

echo "<h3>Vehiculo</h3>";
echo $vehiculo;
echo "<h3>Compacto</h3>";
echo $compacto;
echo "<h3>Lujo</h3>";
echo $lujo;
echo "<h3>Vagoneta</h3>";
echo $vago;
echo "<h3>Camioneta</h3>";
echo $camioneta;
