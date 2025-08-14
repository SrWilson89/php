<?php

class DeportivoMotor extends Barco
{
    protected $potencia; // C.V.

    public function __construct(
        String $matricula,
        float $eslora,
        int $anioFabricacion,
        int $potencia
    ) // C.V.
    {
        parent::__construct($matricula, $eslora, $anioFabricacion);
        $this->potencia = $potencia;
    }

    function precioAlquiler()
    {
        return parent::precioAlquiler() + $this->potencia;
    }
}
