<!--
EJERCICIO 3
En un puerto se alquilan amarres para barcos de distinto tipo. Para cada
ALQUILER se guarda el nombre y DNI del cliente, las fechas inicial y final de
alquiler, la posición del amarre y el barco que lo ocupará. Un BARCO se
caracteriza por su matrícula, su eslora en metros y año de fabricación.
Un alquiler se calcula multiplicando el número de días de ocupación (incluyendo
los días inicial y final) por un módulo función de cada barco (obtenido
simplemente multiplicando por 10 los metros de eslora) y por un valor fijo (600
euros en la actualidad).

Sin embargo, ahora se pretende diferenciar la información de algunos tipos de
barcos:

• número de mástiles para veleros
• potencia en CV para embarcaciones deportivas a motor
• potencia en CV y número de camarotes para yates de lujo.

El módulo de los barcos de un tipo especial se obtiene como el módulo normal
más:

• el número de mástiles para veleros
• la potencia en CV para embarcaciones deportivas a motor
• la potencia en CV más el número de camarotes para yates de lujo.

Utilizando la herencia de forma apropiada. Crea en PHP las clases necesarias.
Crea un objeto alquiler y escribe el importe del alquiler.
-->
<?php
include "Barco.php";
include "Velero.php";
include "DeportivoMotor.php";
include "Yate.php";
include "Alquiler.php";
/*
    EJERCICIO 3
*/

$barco = new Barco("aaa1234", 25, 2010);
$alquiler = new Alquiler(
    "Pepe",
    "12345678A",
    "2021-10-01",
    "2021-10-10",
    1,
    $barco
);
$alquiler->escribirAlquiler();

$velero = new Velero("111", 25, 2000, 25);
$alquilerVelero = new Alquiler(
    "fermin",
    "123456678P",
    "2010-10-01",
    "2010-10-10",
    2,
    $velero
);
$alquilerVelero->escribirAlquiler();

$deportivo = new DeportivoMotor("222", 25, 1990, 300);
$alqDeportivo = new Alquiler(
    "felipe",
    "87654321A",
    "2021-10-01",
    "2021-10-10",
    3,
    $deportivo
);
$alqDeportivo->escribirAlquiler();

$yate = new yate("555", 25, 2011, 300, 20);
$alqYate = new Alquiler(
    "ana",
    "87654321B",
    "2021-10-01",
    "2021-10-10",
    4,
    $yate
);
$alqYate->escribirAlquiler();
