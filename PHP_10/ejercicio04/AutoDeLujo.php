<?php

class AutoDeLujo extends Vehiculo
{
    protected $cantidadPasajeros;

    public function __construct(
        String $numeroSerieMotor,
        String $marca,
        int $anio,
        float $precio,
        int $cantidadPasajeros
    ) {
        parent::__construct(
            $numeroSerieMotor,
            $marca,
            $anio,
            $precio
        );
        $this->cantidadPasajeros = $cantidadPasajeros;
    }
    function __toString()
    {
        $str = parent::__toString();
        $str .= "Cantidad de pasajeros: $this->cantidadPasajeros<br>";
        return $str;
    }
}
