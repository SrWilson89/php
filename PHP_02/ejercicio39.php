<?php
/*
    EJERCICIO 39
    El desarrollo de la serie de Maclaurin para la función seno es
    sen(x) = x − x^3/3! + x^5/5! − x^7/7! - x^9/9! + 
    
            [(-1)^n * x^(2n+1)]
    ... +  --------------------   + ...
                 (2n+1)!              

    Evaluar y mostrar por pantalla el seno de x empleando n términos 
    en el desarrollo, donde x y n se introducen por teclado 
    (x vendrá expresado en radianes).

*/
$x = 1;
$n = 5;
$total = 0.0;
for ($i = 0; $i <= $n; $i++) {
    $total += (pow(-1, $i) * pow($x, 2 * $i + 1)) / factorial(2 * $i + 1);
}

echo "sen($x) = $total";

function factorial(int $n)
{
    $res = 1;
    for ($i = 2; $i <= $n; $i++) {
        $res *= $i;
    }
    return $res;
}
