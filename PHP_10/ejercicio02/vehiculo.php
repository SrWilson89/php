<?php

class VehiculoException extends Exception
{
}
abstract class Vehiculo
{
    protected $color;
    protected $ruedas;

    public function __construct(String $color, int $ruedas)
    {
        if ($color === "") {
            throw new VehiculoException("Debe indicar un color.");
        }
        if ($ruedas <= 0) {
            throw new VehiculoException("Necesitas ruedas.");
        }
        $this->color = $color;
        $this->ruedas = $ruedas;
    }

    function __toString()
    {
        return __CLASS__
            . ": " . $this->color
            . " " . $this->ruedas;
    }

    function tienesRuedas(int $ruedas)
    {
        return $this->ruedas === $ruedas;
    }
}
