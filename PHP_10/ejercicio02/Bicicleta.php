<?php
class Bicicleta extends Vehiculo
{
    protected $tipo;

    public function __construct(String $color, int $ruedas, String $tipo)
    {
        parent::__construct($color, $ruedas);
        $this->tipo = $tipo;
    }

    function __toString()
    {
        $str = parent::__toString();
        return __CLASS__
            . ": " . $this->tipo
            . " " . $str;
    }
}
