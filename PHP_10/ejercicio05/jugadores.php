<?php

class JugadoresException extends Exception{}

class Jugadores{
    protected $numero;
    protected $nombre;
    protected $posicion;

    public function __construct(
        int $numero,
        String $nombre,
        String $posicion
    )
    {
        if ($numero <= 0  && $numero >= 40) {
            throw new JugadoresException("Debes indicar un numero valido.");
        }
        if ($nombre === "") {
            throw new JugadoresException("Necesitas un nombre.");
        }
        if ($posicion === "") {
            throw new JugadoresException("Necesitas una posicion.");
        }
        $this->numero =$numero;
        $this->nombre =$nombre;
        $this->posicion =$posicion;
    }
}