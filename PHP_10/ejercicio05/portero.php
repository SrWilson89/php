<?php
class Portero extends Jugador
{
    public function __construct(
        int $numeroUniforme,
        string $nombre,
        int $minutosJugados
    ) {
        parent::__construct($numeroUniforme, $nombre, $minutosJugados);
    }
}
