<?php

class Pizarra
{
    protected $size;
    protected $tipo;

    public function __construct(int $size, string $tipo)
    {
        $this->size = $size;
        $this->tipo = $tipo;
    }
}
