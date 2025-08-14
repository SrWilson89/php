<!--
6. Modela el funcionamiento de un coche. Debe poder arrancar, acelerar,
frenar, parar. También debería poder comprobar la velocidad a la que va
el coche, la gasolina que le queda, si está arrancado o no.
-->
<?php

class Coche{
    private $arrancar;
    private $velocidad;
    private $gasolina;

    public function __construct(
        bool $arrancar,
        int $velocidad,
        float $gasolina,
        )

    {
        $this->arrancar = $arrancar;
        $this->velocidad = $velocidad;
        $this->gasolina = $gasolina;
    }

    public function getArrancar(){
	return $this->arrancar;
    }

    public function setArrancar($arrancar){
        $this->arrancar = $arrancar;
    }

    public function getVelocidad(){
	return $this->velocidad;
    }

    public function setVelocidad($velocidad){
        $this->velocidad = $velocidad;
    }

    public function getGasolina(){
	return $this->gasolina;
    }

    public function setGasolina($gasolina){
        $this->gasolina = $gasolina;
    }

    function arrancarCoche(){
        if($this->velocidad>0){
            return $this->arrancar=true;
        }else{
            if($this->gasolina>0){
                return $this->arrancar=true;
                return $this->velocidad=0;
                return $this->gasolina-=0.36;
            }else{
                return $this->arrancar=false;
                return $this->velocidad=0;
            }
        }
    }

    function acelerarCoche($x){
        if($x<=0){
            if($this->gasolina>0){
                $this->velocidad+=10;
                $this->gasolina-=0.72;
                $this->arrancar=true;
            }else{
                return $this->arrancar=false;
            }
        }else{
            if($this->gasolina>0){
                $this->velocidad+=$x*1;
                $this->gasolina-=$x*0.0072;
                $this->arrancar=true;
            }else{
                return $this->arrancar=false;
            }
        }
    }

    function frenarCoche($x){
        if($x<=0){
            if($this->gasolina>0){
                if($this->velocidad>=0){
                    $this->velocidad-=10;
                    $this->gasolina=$this->gasolina-0.22;
                }
                else{
                    return $this->arrancar=false;
                }
            }
            else{
                return $this->arrancar=false;
            }
        }
            else{
                if($this->gasolina>0){
                    $this->velocidad-=$x*1;
                    $this->gasolina-=$x*0.0022;
                    $this->arrancar=true;
                }else{
                    return $this->arrancar=false;
                }
            }

    }

    function pararCoche(){
        if(!$this->velocidad>0){
            $this->arrancar=false;
        }else{
            echo "Frena primero animal <br>";
        }
    }

    function velocidadCoche(){
        return $this->velocidad;
    }

    function gasolinaCoche(){
        return $this->gasolina;
    }

    function arrancadoCoche(){
        if($this->arrancar==false){
            return "apagado";
        }else{
            return "encendido";
        }
    }
}

$coche=new Coche(false, 0, 15);

echo "Motor " . $coche->arrancadoCoche() .
" Gasolina:" . $coche->gasolinaCoche() .
" Litros Velocidad: " .$coche->velocidadCoche() . " Km/h " . "<br>";

$coche->acelerarCoche(45);

echo "Motor " . $coche->arrancadoCoche() .
" Gasolina:" . $coche->gasolinaCoche() .
" Litros Velocidad: " .$coche->velocidadCoche() . " Km/h " . "<br>";

$coche->acelerarCoche(455);

echo "Motor " . $coche->arrancadoCoche() .
" Gasolina:" . $coche->gasolinaCoche() .
" Litros Velocidad: " .$coche->velocidadCoche() . " Km/h " . "<br>";

$coche->frenarCoche(400);

echo "Motor " . $coche->arrancadoCoche() .
" Gasolina:" . $coche->gasolinaCoche() .
" Litros Velocidad: " .$coche->velocidadCoche() . " Km/h " . "<br>";

$coche->pararCoche();

$coche->frenarCoche(100);

echo "Motor " . $coche->arrancadoCoche() .
" Gasolina:" . $coche->gasolinaCoche() .
" Litros Velocidad: " .$coche->velocidadCoche() . " Km/h " . "<br>";

$coche->pararCoche();

echo "Motor " . $coche->arrancadoCoche() .
" Gasolina:" . $coche->gasolinaCoche() .
" Litros Velocidad: " .$coche->velocidadCoche() . " Km/h " . "<br>";