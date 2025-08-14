<?php

use PHPUnit\Framework\TestCase;

require "src/Temperaturas.php";

class TemperaturasTest extends TestCase {

    function setUp(): void {
        $this->temp = new Temperaturas();
    }

    function test_generar_temperaturas_entre_menos_25_y_60() {

        $result = $this->temp->generarTemperaturas(5);
        $this->assertIsArray($result);
        $this->assertCount(5, $result);
        $this->assertContainsOnly("int", $result);
        foreach ($result as $value) {
            $this->assertGreaterThan(-26, $value);
        }
        foreach ($result as $value) {
            $this->assertLessThan(61, $value);
        }
    }

    function test_paso_numero_negatico_generar_temperatuas() {

        $result = $this->temp->generarTemperaturas(-3);
        $this->assertEmpty($result);
    }

    function test_que_devuelve_el_menor_elemento() {
        $result = $this->temp->numeroMenorArray([3, 5, 6, -5]);
        $this->assertSame(-5, $result);
    }

    function test_que_devuelve_el_menor_array_vacio() {
        $result = $this->temp->numeroMenorArray([]);
        $this->assertNull($result);
    }

    function test_numero_mayor_array() {
        $result = $this->temp->numeroMayorArray([3, 5, 6, -5]);
        $this->assertSame(6, $result);
    }

    function test_numero_mayor_array_paso_vacio() {
        $result = $this->temp->numeroMayorArray([]);
        $this->assertNull($result);
    }
}
