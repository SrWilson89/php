<?php

class Motocicleta extends Bicicleta
{
    protected $velocidad;
    protected $cilindrada;

    public function __construct(
        String $color,
        int $ruedas,
        String $tipo,
        int $velocidad,
        int $cilindrada
    ) {
        parent::__construct($color, $ruedas, $tipo);
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
