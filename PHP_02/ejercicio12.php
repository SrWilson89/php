<?php
/*
    EJERCICIO 12
    Genera un numero aleatorio entre 1 y 100. 
    Escribe “Fizz” si es divisible por 3. 
    Escribe “Buzz” si es divisible por 5. 
    Escribe “FizzBuzz” si es divisible por 3 y 5. 
    Escribe el número si no es divisible por 3 o 5
*/
$num = rand(1, 100);

if ($num % 3 == 0 && $num % 5 == 0) {
    echo "FizzBuzz";
} else if ($num % 3 == 0) {
    echo "Fizz";
} else if ($num % 5 == 0) {
    echo "Buzz";
} else {
    echo $num;
}
