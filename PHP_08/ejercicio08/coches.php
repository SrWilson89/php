<?php

class Coche{
    protected $marca;
    protected $modelo;
    protected $matricula;
    protected $puertas;
    protected $combustible;
    protected $precioAlquiler;

    public function __construct(
       string $marca,
       string $modelo,
       string $matricula,
       int $puertas,
       int $combustible,
       int $precioAlquiler
       )

       {
           $this->marca = $marca;
           $this->modelo = $modelo;
           $this->matricula = $matricula;
           $this->puertas = $puertas;
           $this->combustible = $combustible;
           $this->precioAlquiler = $precioAlquiler;
       }

    public function getPrecioAlquiler(){
	    return $this->precioAlquiler;
    }

    public function getModelo(){
	return $this->modelo;
    }

    public function getMatricula(){
	return $this->matricula;
    }
}