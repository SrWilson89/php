<?php

class Pelicula {

    function __construct(array $data) {
        if (isset($data["id_pelicula"])) {
            $this->id_pelicula = $data["id_pelicula"];
        }
        $this->titulo = $data["titulo"];
        $this->duracion = $data["duracion"];
        $this->anio = $data["anio"];
        $this->pais = $data["pais"];
        $this->genero = $data["genero"];
        $this->sipnosis = $data["sipnosis"];
        if (isset($data["imagen"])) {
            $this->imagen = $data["imagen"];
        }
    }

    public function setId_pelicula(int $value) {
        $this->id_pelicula = $value;
    }
    public function setNombreImagen(string $value) {
        $this->imagen = $value;
    }
}
