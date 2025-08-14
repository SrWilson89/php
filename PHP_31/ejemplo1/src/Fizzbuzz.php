<?php

class Fizzbuzz {

    function execute(int $numero) {
        if ($numero % 3 === 0 && $numero % 5 === 0) {
            return "Fizzbuzz";
        }
        if ($numero % 3 === 0) {
            return "Fizz";
        }
        if ($numero % 5 === 0) {
            return "Buzz";
        }
        return $numero;
    }
}
