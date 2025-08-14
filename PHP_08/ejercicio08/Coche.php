<?php
class Coche
{
    protected $marca;
    protected $modelo;
    protected $matricula;
    protected $puertas;
    protected $combustible; // litros
    protected $precioAlquiler; // euros

    function __construct(
        String $marca,
        String $modelo,
        String $matricula,
        int $puertas,
        int $combustible,
        int $precioAlquiler
    ) {
        $this->modelo = $modelo;
        $this->marca = $marca;
        $this->matricula = $matricula;
        $this->puertas = $puertas;
        $this->combustible = $combustible;
        $this->precioAlquiler = $precioAlquiler;
    }

    /**
     * Get the value of precioAlquiler
     */
    public function getPrecioAlquiler()
    {
        return $this->precioAlquiler;
    }

    /**
     * Get the value of matricula
     */
    public function getMatricula()
    {
        return $this->matricula;
    }

    /**
     * Get the value of modelo
     */
    public function getModelo()
    {
        return $this->modelo;
    }

    function escribirInfo()
    {
        echo $this->matricula
            . " / " . $this->marca
            . " / " . $this->modelo
            . " / " . $this->precioAlquiler
            . "<br>";
    }
}
