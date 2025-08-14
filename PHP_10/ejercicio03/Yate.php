<?php

class Yate extends DeportivoMotor
{
    protected $numeroCamarotes;

    public function __construct(
        String $matricula,
        float $eslora,
        int $anioFabricacion,
        int $potencia,
        int $numeroCamarotes
    ) {
        parent::__construct(
            $matricula,
            $eslora,
            $anioFabricacion,
            $potencia
        );
        $this->numeroCamarotes = $numeroCamarotes;
    }

    function precioAlquiler()
    {
        return parent::precioAlquiler() + $this->numeroCamarotes;
    }
}
