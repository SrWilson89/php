<?php

namespace Figuras;

/**
 * Representa una figura geométrica.
 * 
 */
abstract class Figura {
    /**
     * Guarda el color de la figura
     * 
     * @property string $color
     */
    protected $color;

    /**
     * Inicializa el objeto.
     * 
     * @param string $color El color de la figura
     */
    function __construct(string $color) {
        $this->color = $color;
    }

    /**
     * Calcula el área de la figura
     * 
     * @return float;
     */
    abstract function area(): float;
    /**
     * Calcula el perímetro de la figura.
     * 
     * @return float 
     */
    abstract function perimetro(): float;
}
