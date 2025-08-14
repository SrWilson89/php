<?php

class Camioneta extends Coche
{
    protected $carga;

    public function __construct(
        String $color,
        int $ruedas,
        int $velocidad,
        int $cilindrada,
        int $carga
    ) {
        parent::__construct($color, $ruedas, $velocidad, $cilindrada);
        $this->carga = $carga;
    }

    function __toString()
    {
        $str = parent::__toString();
        return __CLASS__
            . ": " . $this->carga
            . " " . $str;
    }
}
