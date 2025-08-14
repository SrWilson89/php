<?php

namespace Ejercicio201;

class RectanguloException extends \Exception{}

class Rectangulo extends Forma
{
    protected $ladoMenor;
    protected $ladoMayor;

    function __construct(
        String $color,
        Punto $centro,
        String $nombre,
        int $ladoMenor,
        int $ladoMayor
    ) {
        parent::__construct($color, $centro, $nombre);
        if($ladoMenor<=0){
            throw new RectanguloException("El lado menor deve ser mayor que 0");
        }
        if($ladoMenor<=0){
            throw new RectanguloException("El lado mayor deve ser mayor que 0");
        }
        if($ladoMayor<=$ladoMenor){
            throw new RectanguloException("El lado menor deve ser menor que lado mayor");
        }
        $this->ladoMenor = $ladoMenor;
        $this->ladoMayor = $ladoMayor;
    }

    function imprimir()
    {
        echo "Soy un rectángulo.<br>";
        parent::imprimir();
        echo "Lado menor: $this->ladoMenor<br>";
        echo "Lado mayor: $this->ladoMayor<br>";
    }

    function area()
    {
        return $this->ladoMayor * $this->ladoMenor;
    }

    function perimetro()
    {
        return $this->ladoMenor * 2 + $this->ladoMayor * 2;
    }

    function escalar(float $factor)
    {
        $this->ladoMayor *= $factor;
        $this->ladoMenor *= $factor;
    }
}
