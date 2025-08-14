<?php

namespace Ejercicio201;

class FormaException extends \Exception{}

class Forma
{
    protected $color;
    protected $centro;
    protected $nombre;

    function __construct(

        String $color,
        Punto $centro,
        String $nombre
    ) {
        if($color===""){
            throw new FormaException("El color no puede estar vacio");
        }
        if(is_null($centro)){
            throw new FormaException("Falta el punto");
        }
        if($nombre===""){
            throw new FormaException("Falta el nombre");
        }

        $this->color = $color;
        $this->centro = $centro;
        $this->nombre = $nombre;
    }

    /**
     * Get the value of color
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * Set the value of color
     *
     * @return  self
     */
    public function setColor($color)
    {
        $this->color = $color;

        return $this;
    }

    function imprimir()
    {
        echo "Color: $this->color<br>";
        echo "Nombre: $this->nombre<br>";
        echo "Centro: ";
        $this->centro->imprimir();
        echo "<br>";
    }

    function mover($x, $y)
    {
        $this->centro = new Punto($x, $y);
    }
}
