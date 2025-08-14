<?php
/*
    EJERCICIO 31
    Crea un programa que:
    a. Crea un array de 100 números entre 1 y 100.
    b. Calcula la media.
    c. Calcula la media de los números mayores de 25 y menores de 75.
*/
$numeros = generarArray(100);
$media = mediaArray($numeros);
echo "La media es $media";
$media25y75 = mediaEntre25y75($numeros);
echo "<br>La media de los numeros mayores de 25 y menores de 75 es $media25y75";

function generarArray(int $cantidad)
{
    $num = [];
    for ($i = 1; $i <= $cantidad; $i++) {
        $num[] = rand(1, 100);
    }
    return $num;
}

function mediaEntre25y75(array $data)
{
    $filtro = filtrarArray($data, 25, 75);
    $media = mediaArray($filtro);
    return $media;
}
function mediaArray(array $data)
{
    return sumaArray($data) / count($data);
}

function sumaArray(array $data)
{
    $suma = 0;
    for ($i = 0; $i < count($data); $i++) {
        $suma += $data[$i];
    }
    return $suma;
}

function filtrarArray(array $data, int $min, int $max)
{
    $filtro = [];
    for ($i = 0; $i < count($data); $i++) {
        if ($data[$i] > $min && $data[$i] < $max) {
            $filtro[] = $data[$i];
        }
    }
    return $filtro;
}
