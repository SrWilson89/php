<?php
class DniException extends Exception {
}

class Dni {

    function __construct(string $dni) {
        $tablaDeLetras = [
            "T", "R", "W", "A", "G",
            "M", "Y", "F", "P", "D",
            "X", "B", "N", "J", "Z",
            "S", "Q", "V", "H", "L",
            "C", "K", "E"
        ];

        if (strlen($dni) != 9) {
            throw new DniException("Longitud inadecuada");
        }
        $num = substr($dni, 0, 8);
        if (strtoupper(substr($num, 0, 1)) === "X") {
            $num = "0" . substr($num, 1);
        }
        if (strtoupper(substr($num, 0, 1)) === "Y") {
            $num = "1" . substr($num, 1);
        }
        if (strtoupper(substr($num, 0, 1)) === "Z") {
            $num = "2" . substr($num, 1);
        }
        $letra = substr($dni, -1, 1);
        if (!is_numeric($num)) {
            throw new DniException("Los ocho primeros caracteres deben ser números");
        }
        if (is_numeric($letra)) {
            throw new DniException("El último carácter debe ser una letra");
        }
        // if (
        //     strtoupper($letra) === "U"
        //     || strtoupper($letra) === "O"
        //     || strtoupper($letra) === "I"
        // ) {
        //     throw new DniException("Letra del DNI no válida.");
        // }
        $resto = (int) (intval($num) % 23);
        if (strtoupper($letra) !== $tablaDeLetras[$resto]) {
            throw new DniException("El DNI no es válido");
        }
        $this->dni = $dni;
    }
}
