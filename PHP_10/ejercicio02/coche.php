<?php
class CocheException extends Exception
{
}
class Coche extends Vehiculo
{
    protected $velocidad;
    protected $cilindrada;

    public function __construct(
        String $color,
        int $ruedas,
        int $velocidad,
        int $cilindrada
    ) {
        try {
            parent::__construct($color, $ruedas);
        } catch (VehiculoException $e) {
            throw new CocheException($e->getMessage());
        }
        if ($velocidad <= 0) {
            throw new CocheException("Debe indicar una velocidad mayor de cero.");
        }
        if ($cilindrada <= 0) {
            throw new CocheException("Debe indicar una cilindrada mayor de cero.");
        }
        $this->velocidad = $velocidad;
        $this->cilindrada = $cilindrada;
    }

    function __toString()
    {
        $str = parent::__toString();
        return __CLASS__
            . ": " . $this->velocidad
            . " " . $this->cilindrada
            . " " . $str;
    }
}
