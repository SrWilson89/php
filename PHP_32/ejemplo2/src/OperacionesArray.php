<?php
/*
    EJERCICIO 30
    
    Crea un programa que:
    a. Genere dos vectores con 10 números 
       aleatorios entre 1 y 100.
    b. Escribe los dos vectores.
    c. Escribe la intersección
    d. Escribe la unión (No es necesario 
       tener en cuenta los repetidos)
*/
class OperacionesArray {

    function generarArray(int $cantidad) {
        $num = [];
        for ($i = 1; $i <= $cantidad; $i++) {
            $num[] = rand(1, 100);
        }
        return $num;
    }

    function escribirArray(array $data) {
        for ($i = 0; $i < count($data); $i++) {
            echo $data[$i] . " ";
        }
    }

    function interseccionArrays(array $data1, array $data2) {
        $inter = [];
        for ($i = 0; $i < count($data1); $i++) {
            if ($this->estaNumero($data2, $data1[$i])) {
                $inter[] = $data1[$i];
            }
        }
        return $inter;
    }

    function estaNumero(array $data, int $numero) {
        // Devuelve true si el $numero esta en el array $data
        $ok = false;
        for ($i = 0; $i < count($data); $i++) {
            if ($data[$i] === $numero) {
                $ok = true;
            }
        }
        return $ok;
    }

    function unionArrays(array $data1, array $data2) {
        $union = [];
        for ($i = 0; $i < count($data1); $i++) {
            $union[] = $data1[$i];
        }
        for ($i = 0; $i < count($data2); $i++) {
            $union[] = $data2[$i];
        }
        return $union;
    }
}
