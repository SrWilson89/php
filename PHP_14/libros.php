<?php
    namespace Ejercicio014;

    class LibroException extends \Exception{}

    class Libro{
        protected $isbn;
        protected $titulo;
        protected $autor;
        protected $pags;

        function __construct(
            string $isbn,
            string $titulo,
            string $autor,
            int $pags
        )
        {
            if($isbn===""){
                throw new LibroException("El ISBN no puede estar vacio");
            }

            if($titulo===""){
                throw new LibroException("El titulo no puede estar vacio");
            }

            if($autor===""){
                throw new LibroException("El autor no puede estar vacio");
            }

            if($pags==="" && $pags<=0){
                throw new LibroException("Pon un numero de paginas valido");
            }

            $this->isbn = $isbn;
            $this->titulo = $titulo;
            $this->autor = $autor;
            $this->pags = $pags;
        }

        function imprimir()
    {
        echo "El libro con el ISBN: $this->isbn creado por: $this->autor tiene $this->pags paginas";
        echo "<br>";
    }

    public function getIsbn(){
	return $this->isbn;
    }

    public function setIsbn($isbn){
        $this->isbn = $isbn;
    }

    public function getTitulo(){
	return $this->titulo;
    }

    public function setTitulo($titulo){
        $this->titulo = $titulo;
    }

    public function getAutor(){
	return $this->autor;
    }

    public function setAutor($autor){
        $this->autor = $autor;
    }

    public function getPags(){
	return $this->pags;
    }

    public function setPags($pags){
        $this->pags = $pags;
    }
}

?>