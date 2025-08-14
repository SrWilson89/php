<?php
/*
    EJERCICIO 32
    En el supermercado “El 13" las ventas no van muy bien. 
    Por ello, han decidido lanzar una campaña de captación 
    de clientes consistente en aplicar un descuento de un 5% 
    sobre el importe de la compra si este supera los 60 euros 
    y un 5% adicional si, además, dicho importe (despreciando 
    céntimos de euro) es divisible entre 13. Desarrollar un 
    programa que, dado el importe inicial de una compra, 
    calcule y muestre por pantalla el descuento aplicado 
    y el importe final.
*/
const IMPORTE_MINIMO_OFERTA = 60;
const DESCUENTO_60 = 0.05;
const DESCUENTO_13 = 0.05;
const DIVISOR = 13;

$importe = 13 * 10;
$descuento = 0;

if ($importe > IMPORTE_MINIMO_OFERTA) {
    $descuento = $importe * DESCUENTO_60;
    if ($importe % DIVISOR == 0) {
        $descuento += $importe * DESCUENTO_13;
    }
}

$total = $importe - $descuento;
echo "Importe: $importe";
echo "<br>Descuento: $descuento";
echo "<br>Total: $total";
