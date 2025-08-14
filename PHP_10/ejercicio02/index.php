<?php
include "Vehiculo.php";
include "Coche.php";
include "Camioneta.php";
include "Bicicleta.php";
include "Motocicleta.php";

echo "<h3>Ejercicio 2 (2ª parte)</h3>";
try {
    $vehiculos = [
        new Coche("Rojo", 4, 300, 300),
        new Camioneta("Blanco", 4, 200, 200, 500),
        new Bicicleta("Amarilla", 2, "Urbana"),
        new Motocicleta("Negro", 2, "Deportivo", 250, 600)
    ];

    catalogar($vehiculos);
    echo "<HR>";
    catalogar($vehiculos, 0);
    echo "<HR>";
    catalogar($vehiculos, 2);
    echo "<HR>";
    catalogar($vehiculos, 4);
    echo "<HR>";
} catch (CocheException $e) {
    echo "Vehiculo Exception: " . $e->getMessage();
} catch (Exception $e) {
    echo "Exception: " . $e->getMessage();
} catch (Error $e) {
    echo "Error Exception: " . $e->getMessage();
}

function catalogar(array $v, int $numeroRuedas = null)
{
    $contador = 0;
    foreach ($v as $item) {
        if (
            is_null($numeroRuedas)
            || $item->tienesRuedas($numeroRuedas)
        ) {
            echo $item . "<br>";
            $contador++;
        }
    }
    echo "Se han encontrado $contador vehículos";
    if (!is_null($numeroRuedas)) {
        echo " con $numeroRuedas ruedas:";
    }
}
