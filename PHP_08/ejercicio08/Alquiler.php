<?php
include_once "Coche.php";
include_once "Cliente.php";

class Alquiler
{
    protected $fechaSalida; // fecha entrega de coche al cliente
    protected $fechaEntrada; // fecha de devolucion del coche el cliente
    protected $precioTotal;
    protected $coche;
    protected $cliente;

    function __construct(
        String $fechaSalida,
        Coche $coche,
        Cliente $cliente
    ) {
        $this->fechaSalida = $fechaSalida;
        $this->coche = $coche;
        $this->cliente = $cliente;
    }

    function terminarAlquiler(String $fechaEntrada)
    {
        $this->fechaEntrada = $fechaEntrada;
        $this->calcularPrecio();
    }

    private function calcularPrecio()
    {
        $salida = strtotime($this->fechaSalida);
        $entrada = strtotime($this->fechaEntrada);
        $dias = (($entrada - $salida) / 60 / 60 / 24) + 1;
        $this->precioTotal = $dias * $this->coche->getPrecioAlquiler();
    }

    function escribirInfo()
    {
        echo "Alquiler inicio: $this->fechaSalida<br>";
        echo "Finalizado: $this->fechaEntrada<br>";
        echo "Cliente: " . $this->cliente->getNombre()
            . " " . $this->cliente->getApellidos()
            . "<br>";
        echo "Coche: " . $this->coche->getMatricula() . " / "
            . $this->coche->getModelo() . "<br>";
        echo "Precio total: $this->precioTotal €<br>";
    }
}
