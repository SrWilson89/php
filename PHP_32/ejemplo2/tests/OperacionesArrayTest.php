<?php

use PHPUnit\Framework\TestCase;

require "src/OperacionesArray.php";

class OperacionesArrayTest extends TestCase {

    function setUp(): void {
        $this->op = new OperacionesArray();
    }

    function test_generar_array() {
        $result = $this->op->generarArray(5);
        $this->assertIsArray($result);
        $this->assertCount(5, $result);
        $this->assertContainsOnly("int", $result);
        foreach ($result as $value) {
            $this->assertGreaterThanOrEqual(1, $value);
            $this->assertLessThanOrEqual(100, $value);
        }
    }

    function test_generar_array_cantidad_negativa() {
        $result = $this->op->generarArray(-5);
        $this->assertIsArray($result);
        $this->assertEmpty($result);
    }

    function test_interseccion_arrays_un_elemento_distintos() {
        $result = $this->op->interseccionArrays([1], [2]);
        $this->assertSame([], $result);
    }

    function test_interseccion_arrays_un_elemento_iguales() {
        $result = $this->op->interseccionArrays([2], [2]);
        $this->assertSame([2], $result);
    }

    function test_interseccion_arrays_dos_elementos_distintos() {
        $result = $this->op->interseccionArrays([1, 3], [2, 4]);
        $this->assertSame([], $result);
    }

    function test_interseccion_arrays_dos_elementos_iguales() {
        $result = $this->op->interseccionArrays([2, 3], [2, 4]);
        $this->assertSame([2], $result);
    }

    function test_interseccion_arrays_tres_elementos_coincidentes() {
        $result = $this->op->interseccionArrays([1, 3, 5, 7, 8], [3, 5, 7]);
        $this->assertSame([3, 5, 7], $result);
    }

    function test_unir_arrays_tres_elementos() {
        $result = $this->op->unionArrays([1, 2, 3], [4, 5, 6]);
        $this->assertSame([1, 2, 3, 4, 5, 6], $result);
    }

    function test_unir_arrays_vacios() {
        $result = $this->op->unionArrays([], []);
        $this->assertSame([], $result);
    }

    function test_esta_numero() {
        $result = $this->op->estaNumero([1, 2, 3, 4], 3);
        $this->assertTrue($result);
    }

    function test_no_esta_numero() {
        $result = $this->op->estaNumero([1, 2, 3, 4], 7);
        $this->assertFalse($result);
    }

    function test_esta_numero_array_vacio() {
        $result = $this->op->estaNumero([], 7);
        $this->assertFalse($result);
    }
}
