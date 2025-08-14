<?php

class Alquiler
{
    protected $nombre_cliente;
    protected $dni_cliente;
    protected $fecha_inicial;
    protected $fecha_final;
    protected $posicion_amarre;
    protected $barco;

    function __construct(
        String $nombreCliente,
        String $dniCliente,
        String $fechaInicial,
        String $fechaFinal,
        int $posicionAmarre,
        Barco $barco
    ) {
        $this->nombre_cliente = $nombreCliente;
        $this->dni_cliente = $dniCliente;
        $this->fecha_inicial = $fechaInicial;
        $this->fecha_final = $fechaFinal;
        $this->posicion_amarre = $posicionAmarre;
        $this->barco = $barco;
    }

    function escribirAlquiler()
    {
        echo "Importe del alquiler: ";
        echo $this->calcularAlquiler();
        echo "€<br>";
    }

    private function calcularAlquiler()
    {
        $ini = strtotime($this->fecha_inicial);
        $end = strtotime($this->fecha_final);
        $dias = intval(ceil((($end - $ini) / 60 / 60 / 24) + 1));
        $total = $dias * $this->barco->precioAlquiler();
        return $total;
    }
}
