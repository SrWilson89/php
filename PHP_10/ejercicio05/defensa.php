<?php
class Defensa extends Jugador
{
    protected $golesAnotados;

    public function __construct(
        int $numeroUniforme,
        string $nombre,
        int $minutosJugados,
        int $golesAnotados
    ) {
        parent::__construct($numeroUniforme, $nombre, $minutosJugados);
        $this->golesAnotados = $golesAnotados;
    }
}
