<?php

use PHPUnit\Framework\TestCase;

require "src/NumeroRomano.php";

class NumeroRomanoTest extends TestCase {

    function test_numero_romano_i() {
        $romano = new NumeroRomano(1);
        $this->assertSame("I", $romano->getValue());
    }

    function test_numero_romano_ii() {
        $romano = new NumeroRomano(2);
        $this->assertSame("II", $romano->getValue());
    }

    function test_numero_romano_iii() {
        $romano = new NumeroRomano(3);
        $this->assertSame("III", $romano->getValue());
    }
    function test_numero_romano_iv() {
        $romano = new NumeroRomano(4);
        $this->assertSame("IV", $romano->getValue());
    }
    function test_numero_romano_v() {
        $romano = new NumeroRomano(5);
        $this->assertSame("V", $romano->getValue());
    }
    function test_numero_romano_vi() {
        $romano = new NumeroRomano(6);
        $this->assertSame("VI", $romano->getValue());
    }
    function test_numero_romano_vii() {
        $romano = new NumeroRomano(7);
        $this->assertSame("VII", $romano->getValue());
    }
    function test_numero_romano_viii() {
        $romano = new NumeroRomano(8);
        $this->assertSame("VIII", $romano->getValue());
    }
    function test_numero_romano_ix() {
        $romano = new NumeroRomano(9);
        $this->assertSame("IX", $romano->getValue());
    }

    function test_numero_romano_x() {
        $romano = new NumeroRomano(10);
        $this->assertSame("X", $romano->getValue());
    }

    function test_numero_romano_1989() {
        $romano = new NumeroRomano(1989);
        $this->assertSame("MCMLXXXIX", $romano->getValue());
    }
    function test_numero_romano_1854() {
        $romano = new NumeroRomano(1854);
        $this->assertSame("MDCCCLIV", $romano->getValue());
    }
    function test_numero_romano_3000() {
        $romano = new NumeroRomano(3000);
        $this->assertSame("MMM", $romano->getValue());
    }
}
