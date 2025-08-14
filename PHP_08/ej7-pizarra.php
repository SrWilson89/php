<?php

class Pizzarra{

    private $size_pizarra;
    private $tipo_pizzara;

    public function __construct(
        int $size_pizarra,
        string $tipo_pizzara
        )
    {
        $this->size_pizarra=$size_pizarra;
        $this->tipo_pizzara=$tipo_pizzara;
    }

}