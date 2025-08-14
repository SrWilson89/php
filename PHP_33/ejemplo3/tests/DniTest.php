<?php

use PHPUnit\Framework\TestCase;

require "src/Dni.php";

class DniTest extends TestCase {

    function test_dni_falla_si_es_de_mas_de_9_caracteres() {
        $this->expectException(DniException::class);
        $dni = new Dni("123456789K");
    }

    function test_dni_falla_si_es_menor_de_9_caracteres() {
        $this->expectException(DniException::class);
        $dni = new Dni("12345K");
    }

    function test_dni_falla_si_los_8_primeros_caracteres_no_son_numeros() {
        $this->expectException(DniException::class);
        $dni = new Dni("1234T678K");
    }
    function test_dni_falla_si_el_ultimo_caracter_no_es_letra() {
        $this->expectException(DniException::class);
        $dni = new Dni("123456789");
    }
    function test_dni_falla_si_tiene_letra_U() {
        $this->expectException(DniException::class);
        $dni = new Dni("12345678U");
    }
    function test_dni_falla_si_tiene_letra_O() {
        $this->expectException(DniException::class);
        $dni = new Dni("12345678O");
    }
    function test_dni_falla_si_tiene_letra_I() {
        $this->expectException(DniException::class);
        $dni = new Dni("12345678I");
    }
    function test_dni_falla_si_tiene_letra_Ñ() {
        $this->expectException(DniException::class);
        $dni = new Dni("12345678Ñ");
    }

    function test_dni_falla_si_al_calcular_letra_no_coincide_con_la_pasada() {
        $this->expectException(DniException::class);
        $dni = new Dni("12345678W");
    }

    function test_dni_es_valido() {
        $dni = new Dni("00000000T");
        $this->assertSame("00000000T", $dni->dni);
    }

    function test_dni_permite_nie_empieza_con_X() {
        $dni = new Dni("X0000000T");
        $this->assertSame("X0000000T", $dni->dni);
    }
    function test_dni_permite_nie_empieza_con_Y() {
        $dni = new Dni("Y0000000Z");
        $this->assertSame("Y0000000Z", $dni->dni);
    }
    function test_dni_permite_nie_empieza_con_Z() {
        $dni = new Dni("Z0000000M");
        $this->assertSame("Z0000000M", $dni->dni);
    }

    function test_dni_valido_1() {
        $dni = new Dni("12345678Z");
        $this->assertSame("12345678Z", $dni->dni);
    }

    function test_dni_valido_2() {
        $dni = new Dni("87654321X");
        $this->assertSame("87654321X", $dni->dni);
    }

    function test_dni_valido_si_letras_minusculas() {
        $dni = new Dni("87654321x");
        $this->assertSame("87654321x", $dni->dni);
    }

    function test_nie_valido_letra_en_minuscula() {
        $dni = new Dni("z0000000M");
        $this->assertSame("z0000000M", $dni->dni);
    }
}
