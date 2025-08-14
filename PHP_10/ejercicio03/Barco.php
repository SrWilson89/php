<?php

class Barco
{
    private const PRECIO_BASE = 600;
    protected $matricula;
    protected $eslora; // metros
    protected $anioFabricacion;

    public function __construct(
        String $matricula,
        float $eslora,
        int $anioFabricacion
    ) {
        $this->matricula = $matricula;
        $this->eslora = $eslora;
        $this->anioFabricacion = $anioFabricacion;
    }

    function precioAlquiler()
    {
        return Barco::PRECIO_BASE + $this->eslora * 10;
    }
}
