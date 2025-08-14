<?php

class vehiculo
{
    protected $numeroSerieMotor;
    protected $marca;
    protected $anio;
    protected $precio;

    public function __construct(
        String $numeroSerieMotor,
        String $marca,
        int $anio,
        float $precio
    ) {
        $this->numeroSerieMotor = $numeroSerieMotor;
        $this->marca = $marca;
        $this->anio = $anio;
        $this->precio = $precio;
    }

    function __toString()
    {
        $str = "Numero de serie: $this->numeroSerieMotor<br>";
        $str .= "Marca: $this->marca<br>";
        $str .= "Anio: $this->anio<br>";
        $str .= "Precio: $this->precio<br>";
        return $str;
    }
}
