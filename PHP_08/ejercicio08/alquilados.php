<?php

include_once "coches.php";
include_once "clientes.php";

class Alquiler
{

    protected $fechaSalida;
    protected $fechaEntrada;
    protected $precioTotal;
    protected $coche;
    protected $cliente;

    public function __construct(
        string $fechaSalida,
        Coche $coche,
        Clientes $cliente
        )

        {
            $this->fechaSalida = $fechaSalida;
            $this->cliente = $cliente;
            $this->coche = $coche;
        }

        function terminarAlquiler($fechaEntrada){
            $this->fechaEntrada=$fechaEntrada;
            $this->calcularPrecio();
        }

        private function calcularPrecio(){
            $entrada=strtotime($this->fechaEntrada);
            $salida=strtotime($this->fechaSalida);
            $dias=(($entrada-$salida)/60/60/24)+1;

            $this->precioTotal=$dias* $this->coche->getPrecioAlquiler();
        }

        function escribirInfo(){
            echo"Alquiler inicio: $this->fechaSalida <br>";
            echo"Alquiler finalizado: $this->fechaEntrada <br>";
            echo"Cliente:" . $this->cliente->getNombre() ." " .
            $this->cliente->getApellido() ."<br>";
            echo"Coche:" . $this->coche->getMatricula() . "/ ".
            $this->coche->getModelo() ."<br>";
            echo"Alquiler inicio: $this->precioTotal €<br>";
        }
}
