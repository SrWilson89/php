<?php
class Velero extends Barco
{
    protected $numeroMastiles;

    public function __construct(
        String $matricula,
        float $eslora,
        int $anioFabricacion,
        int $numeroMastiles
    ) {
        parent::__construct($matricula, $eslora, $anioFabricacion);
        $this->numeroMastiles = $numeroMastiles;
    }

    function precioAlquiler()
    {
        return parent::precioAlquiler() + $this->numeroMastiles;
    }
}
