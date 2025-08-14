<?php

abstract class Jugador
{
    protected $numeroUniforme;
    protected $nombre;

    protected $minutosJugados;

    public function __construct(
        int $numeroUniforme,
        string $nombre,
        int $minutosJugados
    ) {
        $this->numeroUniforme = $numeroUniforme;
        $this->nombre = $nombre;
        $this->minutosJugados = $minutosJugados;
    }
}
