<?php
$num = 25;
// > mayor que
// < menor que
// >= mayor o igual
// <= meor o igual
// != distinto
if ($num > 25) {
    echo "Eres mayor";
} else {
    echo "Eres menor o igual";
}


// USO DE VARIAS EXPRESIONES
$num1 = 26;
$num2 = 5;

if ($num1 > 25 && $num2 == 5) {
    echo "<br>$num1 es mayor que 25 y $num2 es igual a 5.";
} else {
    echo "<br>No lo son";
}

$num3 = 10;
$num4 = 15;
if ($num3 == 10 || $num4 > 20) {
    echo "<br>$num3 es igual 10 o $num4 es mayor que 20";
}
