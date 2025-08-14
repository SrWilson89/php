<!--
8. Crear las clases necesarias para modelar una empresa de alquiler de
coches. (coches, clientes). Un cliente debe poder alquilar o devolver un
coche.
-->

<?php
    class Clientes{
    private $nombre;
    private $DNI;
    private $coche;

    public function __construct(
        string $nombre,
        string $DNI,
        string $coche,
        )

        {
            $this->nombre = $nombre;
            $this->DNI = $DNI;
            $this->coche = $coche;
        }

        public function getNombre(){
        return $this->nombre;
        }

        public function setNombre($nombre){
            $this->nombre = $nombre;
        }

        public function getDNI(){
        return $this->DNI;
        }

        public function setDNI($DNI){
            $this->DNI = $DNI;
        }

        public function getCoche(){
        return $this->coche;
        }

        public function setCoche($coche){
            $this->coche = $coche;
        }

    }

    class CochesAlquilado{
         private $alquiler;

         public function __construct(
            bool $alquiler,
            )

            {
                $this->alquiler = $alquiler;
            }

        public function getAlquiler(){
        return $this->alquiler;
        }

        public function setAlquiler($alquiler){
            $this->alquiler = $alquiler;
        }
    }

$cliente=new Clientes("Alejandro Diaz Mar", "05545632K", "Ford GT40");

echo "<h2>Nombre: " . $cliente->getNombre() . "<br>".
" DNI:" . $cliente->getDNI() . "<br>".
//" Esta alquilado:" . $cliente->alquiler() . "<br>".
"Coche alquilado: " .$cliente->getCoche() . " " . "<br></h2>";