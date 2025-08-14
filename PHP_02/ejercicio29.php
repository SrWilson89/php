<?php
/*
    EJERCICIO 29
    Crea un programa que:
    a. Genere 10 números aleatorios entre 1 y 10.
    b. Comprueba si el numero 5 fue uno de los números generados.
    c. Si está el 5 escribe cuantas veces aparece.
*/
$cincos = 0; // variable para contar los 5 que salgan
for ($i = 1; $i <= 10; $i++) {
    $num = rand(1, 10);
    if ($num === 5) {
        $cincos++;
    }
}

if ($cincos > 0) {
    echo "El cinco ha salido $cincos veces.";
} else {
    echo "No han salido cincos";
}
