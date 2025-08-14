<?php

namespace Figuras;

use \Figuras\Figura;

/**
 * Representa una figura cuadrada
 */
class Cuadrado extends Figura {
    /**
     * Longitud del lado
     * 
     * @property float $lado
     */
    protected $lado;

    /**
     * Inicia el objeto cuadrado
     * 
     * @param string $color Color del cuadrado
     * @param string $lado Longitud del lado
     */
    function __construct(string $color, float $lado) {
        parent::__construct($color);
        $this->lado = $lado;
    }

    /**
     * Calcula el area del cuadrado
     * 
     * @return float
     */
    function area(): float {
        return $this->lado * $this->lado;
    }

    /** 
     * Calcula el perímetro del cuadrado
     * 
     * @return float
     */
    function perimetro(): float {
        return 4 * $this->lado;
    }
}
