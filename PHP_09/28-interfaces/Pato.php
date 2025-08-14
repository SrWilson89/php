<?php

namespace Interfaces28;

class Pato implements Interfaces\IVolar, Interfaces\ICorrer
{
    function volar(int $altura)
    {
        throw new \Exception("Method not implemented");
    }

    function correr(int $velocidad)
    {
        throw new \Exception("Method not implemented");
    }
}
