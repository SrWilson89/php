<?php

class Asignatura
{
    private $id;
    private $nombre;

    function __construct(int $id, string $nombre)
    {
        $this->id = $id;
        $this->nombre = $nombre;
    }

    public function getNombre(){
	return $this->nombre;
    }
}
