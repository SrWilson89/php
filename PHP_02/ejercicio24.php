<?php
/*
    EJERCICIO 24
    Escribe números aleatorios hasta que salga un 0.
*/
$numero = random_int(1, 100);
echo "$numero<br>";
while ($numero != 0) {
    $numero = random_int(0, 100);
    echo "$numero<br>";
}
