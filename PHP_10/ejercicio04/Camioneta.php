<?php

class Camioneta extends Vehiculo
{
    protected $capacidadCarga; // Kg
    protected $cantidadEjes;
    protected $rodadas;


    public function __construct(
        String $numeroSerieMotor,
        String $marca,
        int $anio,
        float $precio,
        int $capacidadCarga,
        int $cantidadEjes,
        int $rodadas
    ) {
        parent::__construct($numeroSerieMotor, $marca, $anio, $precio);
        $this->capacidadCarga = $capacidadCarga;
        $this->cantidadEjes = $cantidadEjes;
        $this->rodadas = $rodadas;
    }

    function __toString()
    {
        $str = parent::__toString();
        $str .= "Capacidad de carga: $this->capacidadCarga<br>";
        $str .= "Cantidad de ejes: $this->cantidadEjes<br>";
        $str .= "Rodadas: $this->rodadas<br>";
        return $str;
    }
}
