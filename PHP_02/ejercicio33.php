<?php
/*
    EJERCICIO 33
    Calcular y escribir la temperatura más alta 
    y más baja de una serie de 100 temperaturas 
    generadas al azar entre -25º y 60º.
*/
$temps = generarTemperaturas(100);
$menor = numeroMenorArray($temps);
$mayor = numeroMayorArray($temps);

echo "Temperatura menor: $menor";
echo "<br>Temperatura mayor: $mayor";

function generarTemperaturas(int $cantidad)
{
    $temp = [];
    for ($i = 1; $i <= $cantidad; $i++) {
        $temp[] = rand(-25, 60);
    }
    return $temp;
}

function numeroMenorArray(array $data)
{
    $menor = $data[0];
    for ($i = 1; $i < count($data); $i++) {
        if ($data[$i] < $menor) {
            $menor = $data[$i];
        }
    }
    return $menor;
}

function numeroMayorArray(array $data)
{
    $mayor = $data[0];
    for ($i = 1; $i < count($data); $i++) {
        if ($data[$i] > $mayor) {
            $mayor = $data[$i];
        }
    }
    return $mayor;
}
