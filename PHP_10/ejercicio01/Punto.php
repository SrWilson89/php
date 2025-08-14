<?php

namespace Ejercicio201;

class Punto
{
    protected $x;
    protected $y;

    function __construct(int $x, int $y)
    {
        $this->x = $x;
        $this->y = $y;
    }

    function imprimir()
    {
        echo "($this->x, $this->y)";
    }
}
