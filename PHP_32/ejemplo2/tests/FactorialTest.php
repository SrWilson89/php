<?php

use PHPUnit\Framework\TestCase;

require "src/Factorial.php";

class FactorialTest extends TestCase {

    function test_factorial_de_0() {
        $fact = new Factorial();
        $resul = $fact->evaluar(0);
        $this->assertSame(1, $resul);
    }

    function test_factorial_de_1() {
        $fact = new Factorial();
        $resul = $fact->evaluar(1);
        $this->assertSame(1, $resul);
    }

    function test_factorial_de_3() {
        $fact = new Factorial();
        $resul = $fact->evaluar(3);
        $this->assertSame(6, $resul);
    }

    function test_factorial_de_7() {
        $fact = new Factorial();
        $resul = $fact->evaluar(7);
        $this->assertSame(5040, $resul);
    }

    function test_factorial_de_negativo() {
        $fact = new Factorial();
        $resul = $fact->evaluar(-3);
        $this->assertSame(0, $resul);
    }
}
