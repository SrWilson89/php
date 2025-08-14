<?php
/*
    EJERCICIO 37
    Escribir los n primeros números de la serie de Fibonacci a partir de un número natural n.
    Nota: La serie de Fibonacci es 0,1,1,2,3,5,8,13,... de acuerdo con la ley siguiente:
    fibonacci(1) = 0
    fibonacci(2) = 1
    fibonacci(3) = 1 = fibonacci(2) + fibonacci(1)
    fibonacci(4) = 2 = fibonacci(3) + fibonacci(2)
    ...
    fibonacci(n) = fibonacci(n-1) + fibonacci(n-2)
*/
class Fibonacci {

    function fibonacci(int $n) {
        if ($n === 1) return 0;
        if ($n === 2) return 1;
        $fibo = $this->fibonacci($n - 1) + $this->fibonacci($n - 2);
        return $fibo;
    }


    function serieFibonacci(int $n) {
        $n1 = 0;
        $n2 = 0;
        $str = "";

        if ($n >= 1) {
            $n1 = 0;
            $str .= "$n1";
        }
        if ($n >= 2) {
            $n2 = 1;
            $str .= ", $n2";
        }

        for ($i = 3; $i <= $n; $i++) {
            $n3 = $n1 + $n2;
            $str .= ", " . $n3;
            $n1 = $n2;
            $n2 = $n3;
        }
        return $str;
    }
}
