<?php

use PHPUnit\Framework\TestCase;

require "src/Fibonacci.php";

class FibonacciTest extends TestCase {

    function test_si_paso_1_devuelve_0() {
        $fibo = new Fibonacci();
        $result = $fibo->fibonacci(1);
        $this->assertEquals(0, $result);
    }

    function test_si_paso_2_devuelve_1() {
        $fibo = new Fibonacci();
        $result = $fibo->fibonacci(2);
        $this->assertEquals(1, $result);
    }

    function test_si_paso_3_devuelve_1() {
        $fibo = new Fibonacci();
        $result = $fibo->fibonacci(3);
        $this->assertEquals(1, $result);
    }

    function test_si_paso_4_devuelve_2() {
        $fibo = new Fibonacci();
        $result = $fibo->fibonacci(4);
        $this->assertEquals(2, $result);
    }

    function test_si_paso_8_devuelve_13() {
        $fibo = new Fibonacci();
        $result = $fibo->fibonacci(8);
        $this->assertEquals(13, $result);
    }

    function test_serie_fibonacci_para_1() {
        $fibo = new Fibonacci();
        $result = $fibo->seriefibonacci(1);
        //$this->assertEquals(0, $result); // == en vez de ===
        $this->assertSame("0", $result); // ===
    }

    function test_serie_fibonacci_para_2() {
        $fibo = new Fibonacci();
        $result = $fibo->seriefibonacci(2);
        //$this->assertEquals(0, $result); // == en vez de ===
        $this->assertSame("0, 1", $result); // ===
    }
    function test_serie_fibonacci_para_4() {
        $fibo = new Fibonacci();
        $result = $fibo->seriefibonacci(4);
        //$this->assertEquals(0, $result); // == en vez de ===
        $this->assertSame("0, 1, 1, 2", $result); // ===
    }

    function test_serie_fibonacci_para_8() {
        $fibo = new Fibonacci();
        $result = $fibo->seriefibonacci(8);
        //$this->assertEquals(0, $result); // == en vez de ===
        $this->assertSame("0, 1, 1, 2, 3, 5, 8, 13", $result); // ===

    }
}
