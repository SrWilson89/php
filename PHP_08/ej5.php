<!--
5. Crea una clase para modelar una cuenta bancaria. Esta tendrá asociada
un Código Cuenta Cliente (CCC), un titular y un saldo. El CCC está
formado por 20 dígitos, de los cuales, 4 dígitos representan la entidad
bancaria, otros 4 dígitos para la oficina, 2 dígitos de control y 10 para el
número de cuenta. Se debe poder retirar o ingresar efectivo.
-->

<?php

class Cuenta
{
    private $titular;
    private $saldo;
    private $cuenta;

    public function __construct(string $titular,int $saldo,string $cuenta)
    {
        $this->titular = $titular;
        $this->saldo = $saldo;
        $this->cuenta = $cuenta;
    }

    public function getTitular(){
	return $this->titular;
    }

    public function setTitular($titular){
        $this->titular = $titular;
    }

    public function getSaldo(){
	return $this->saldo;
    }

    public function setSaldo($saldo){
        $this->saldo = $saldo;
    }

    public function getCuenta(){
	return $this->cuenta;
    }

    public function setCuenta($cuenta){
        $this->cuenta = $cuenta;
    }

    function ingresarDinero($dinero){
        return $this->saldo=$this->saldo+$dinero;
    }

    function retirarDinero($dinero){
        return $this->saldo=$this->saldo-$dinero;
    }
}

$cuenta=new Cuenta("Jaime", 10000, "25468452145635786482");

echo "Nombre: " . $cuenta->getTitular() . " Saldo:" . $cuenta->getSaldo() . "€ CCC: " .$cuenta->getCuenta() . " " . "<br>";

$cuenta->ingresarDinero(50000);

echo "Nombre: " . $cuenta->getTitular() . " Saldo:" . $cuenta->getSaldo() . "€ CCC: " .$cuenta->getCuenta() . " " . "<br>";

$cuenta->retirarDinero(3500);

echo "Nombre: " . $cuenta->getTitular() . " Saldo:" . $cuenta->getSaldo() . "€ CCC: " .$cuenta->getCuenta() . " " . "<br>";


?>