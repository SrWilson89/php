<?php
include_once "Libro.php";
class ColeccionLibros{
    private $nombreColeccion;
    private $libros;

    public function __construct(String $nombreColeccion, array $libros)
    {
        $this->nombreColeccion=$nombreColeccion;
        $this->libros=$libros;
    }

    public function agregarLibro(Libro $libro){
        $this->libros[]=$libro;
    }

    public function contarLibros(){
        echo "<br>En la coleccion '".$this->nombreColeccion."' hay ".count( $this->libros)." libros.<br>";
    }
}