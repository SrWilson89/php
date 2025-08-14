<?php
class Libro{
    private $isbn;
    private $titulo;
    private $autor;
    private $numPag;

    public function __construct(String $isbn,String $titulo,String $autor,int $numPag)
    {
        $this->isbn=$isbn;
        $this->titulo=$titulo;
        $this->autor=$autor;
        $this->numPag=$numPag;
    }

    public function info(){
        echo "<br>El libro '".$this->titulo."' con ISBN: '".$this->isbn."' creado por el autor ".$this->autor." tiene ".$this->numPag." páginas.<br>";
    }

    public function comparar(Libro $libro){
        if($this->numPag>$libro->getNumPag()){
            echo "<br>El libro '".$this->titulo."' tiene más páginas que el libro '".$libro->getTitulo()."'.<br>";
        }else{
            echo "<br>El libro '".$this->titulo."' no tiene más páginas que el libro '".$libro->getTitulo()."'.<br>";
        }
    }

	public function getNumPag(){
		return $this->numPag;
	}

	public function getTitulo(){
		return $this->titulo;
	}
}