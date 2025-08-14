<?php

class Libro {

    function __construct(array $data) {
        if (isset($data["isbn"])) {
            $this->isbn = $data["isbn"];
        }
        $this->titulo = $data["titulo"];
        $this->anio = $data["anio_publicacion"];
        $this->editorial = $data["editorial"];

        $this->descripcion = $data["descripcion"];
        if (isset($data["imagen"])) {
            $this->imagen = $data["imagen"];
        }
    }

    public function setIsbn(int $value) {
        $this->isbn = $value;
    }
    public function setNombreImagen(string $value) {
        $this->imagen = $value;
    }
}
