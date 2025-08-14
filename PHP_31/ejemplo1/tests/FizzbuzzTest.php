<?php

use PHPUnit\Framework\TestCase;

require "src/Fizzbuzz.php";

class FizzbuzzTest extends TestCase {

    function test_si_paso_3_devuelve_fizz() {
        $fizz = new Fizzbuzz();
        $result = $fizz->execute(3);
        $this->assertEquals("Fizz", $result);
    }

    function test_si_paso_5_devuelve_buzz() {
        $fizz = new Fizzbuzz();
        $result = $fizz->execute(5);
        $this->assertEquals("Buzz", $result);
    }

    function test_si_paso_15_devuelve_fizzbuzz() {
        $fizz = new Fizzbuzz();
        $result = $fizz->execute(15);
        $this->assertEquals("Fizzbuzz", $result);
    }

    function test_si_paso_2_devuelve_2() {
        $fizz = new Fizzbuzz();
        $result = $fizz->execute(2);
        $this->assertEquals(2, $result);
    }

    function test_si_paso_7_devuelve_7() {
        $fizz = new Fizzbuzz();
        $result = $fizz->execute(7);
        $this->assertEquals(7, $result);
    }

    function test_paso_un_texto() {
        $fizz = new Fizzbuzz();
        $this->expectException(TypeError::class);
        $fizz->execute("rtr");
    }
}
