<?php
/*
    fopen($filename, $mode): resource
    Abre/crea un archivo en modo lectura/escritura según
    indequem r, r+, w, w+, a, a+os en mode: 
    mode:

    fclose($handle): bool
    Cierra un puntero a un archivo abierto

    fgets($handle, $length = ?)
    Obtiene una línea desde el puntero a un fichero

    fputs() - fwrite($handle, $string, $lenght = ?)
    Escribe una línea de texto.

    file_exists($filename): bool
    Comprueba si existe un fichero o directorio

    unlink($hanler)
    Elimina un archivo
*/

// $fp = fopen("prueba.txt", "a");
// if ($fp) {
//     fputs($fp, "Escribo mi primera línea\n");
//     fwrite($fp, "Escribo mi primera línea 2\n");
//     fclose($fp);
//     echo "Archivo creado";
// } else {
//     echo "Upsss, no se ha podido crear el archivo";
// }

$fp = fopen("prueba.txt", "r");
if ($fp) {
    while ($fila = fgets($fp)) {
        echo $fila . "<br>";
    }
}
fclose($fp);
