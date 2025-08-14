<?php
/*
1. Crea una clase que represente a una persona. Los datos que debe tener
serán: nombre, apellidos, fecha de nacimiento, DNI, dirección. Crea los
métodos necesarios para poder obtener y modificar los datos. Además,
crea un método que devuelva la edad de la persona.
*/

class Persona2
{
    private $nombre;
    private $apellidos;
    private $nacimiento;
    private $dni;
    private $dirección;

    public function __construct(
        string $nombre,
        string $apellidos,
        string $nacimiento,
        string $dni,
        string $dirección
    )

    {
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
        $this->nacimiento = $nacimiento;
        $this->dni = $dni;
        $this->dirección = $dirección;
    }

    function getNombre()
    {
        return $this->nombre;
    }
    function setNombre(string $value)
    {
        $this->nombre = $value;
    }

    function getApellidos()
    {
        return $this->apellidos;
    }
    function setApellidos(string $value)
    {
        $this->apellidos = $value;
    }

    function getNacimiento()
    {
        return $this->nacimiento;
    }
    function setNacimiento(string $value)
    {
        $this->nacimiento = $value;
    }

    function getDni()
    {
        return $this->dni;
    }
    function setDni(string $value)
    {
        $this->dni = $value;
    }

    function getDirección()
    {
        return $this->dirección;
    }
    function setDirección(string $value)
    {
        $this->dirección = $value;
    }

    function getEdad(){
        $actual=getdate()[0];
        $nac = strtotime($this->nacimiento);
        $edad = intval(($actual-$nac)/60/60/24/365.25);
        return $edad;
    }

}

$pepe = new Persona2(
    "Pepe",
    "Villa Villa",
    "2000/01/01",
    "24456875C",
    "C/ España");



echo "Nombre: " . $pepe->getNombre() . " " . $pepe->getApellidos() . " " .
 "Edad: " . $pepe->getEdad() . "<br>";

/*
2. Crea una clase represente un cuadrado. Esta clase debe poder devolver
el área y perímetro del cuadrado.
*/

class Cuadrado
{
    private $lado;

    public function __construct($lado)
    {
        $this->lado = $lado;
    }



    public function getLado(){
	return $this->lado;
    }

    public function setLado($lado){
        $this->lado = $lado;
    }

    function gerArea(){
        return $this->lado*2;
    }

    function getPerimetro(){
        return $this->lado*4;
    }
}

$cuadrado=new Cuadrado(5);

echo "Area ". $cuadrado->gerArea() . " " . "<br>";
echo "Perimetro". $cuadrado->getPerimetro() . " " . "<br>";

/*
3. Crea una clase que represente un rectángulo. Esta clase debe poder
devolver el área y perímetro del rectángulo.
*/

class Rectangulo
{
    private $longitud;
    private $ancho;

    public function __construct($longitud, $ancho)
    {
        $this->longitud = $longitud;
        $this->ancho = $ancho;
    }

    public function getLongitud(){
	return $this->longitud;
    }

    public function setLongitud($longitud){
        $this->longitud = $longitud;
    }

    public function getAncho(){
	return $this->ancho;
    }

    public function setAncho($ancho){
        $this->ancho = $ancho;
    }

    function gerArea(){
        return ($this->ancho*2) + ($this->longitud*2);
    }

    function getPerimetro(){
        return $this->ancho * $this->longitud;
    }
}

$rectangulo=new Rectangulo(5, 7);

echo "Area ". $rectangulo->gerArea() . " " . "<br>";
echo "Perimetro". $rectangulo->getPerimetro() . " " . "<br>";

/*
4. Crea una clase que represente un triángulo. Esta clase debe poder
devolver el área del triángulo y el perímetro. (área = base x altura / 2 y
perímetro = suma de los lados).
*/

class Triangulo
{
    private $base;
    private $altura;
    private $ladox;
    private $ladoy;
    private $ladoz;

    public function __construct($base, $altura, $ladox, $ladoy, $ladoz)
    {
        $this->base = $base;
        $this->altura = $altura;
        $this->ladox = $ladox;
        $this->ladoy = $ladoy;
        $this->ladoz = $ladoz;
    }


    public function getBase(){
	return $this->base;
    }

    public function setBase($base){
        $this->base = $base;
    }

    public function getAltura(){
	return $this->altura;
    }

    public function setAltura($altura){
        $this->altura = $altura;
    }

    public function getLadox(){
	return $this->ladox;
    }

    public function setLadox($ladox){
        $this->ladox = $ladox;
    }

    public function getLadoy(){
	return $this->ladoy;
    }

    public function setLadoy($ladoy){
        $this->ladoy = $ladoy;
    }

    public function getLadoz(){
	return $this->ladoz;
    }

    public function setLadoz($ladoz){
        $this->ladoz = $ladoz;
    }

    function gerArea(){
        return $this->base*$this->base/2;
    }

    function getPerimetro(){
        return $this->ladox + $this->ladoy + $this->ladoz;
    }
}

$triangulo=new Triangulo(5, 10, 5, 6, 8);

echo "Area ". $triangulo->gerArea() . " " . "<br>";
echo "Perimetro". $triangulo->getPerimetro() . " " . "<br>";

?>