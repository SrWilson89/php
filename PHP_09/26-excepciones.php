<?php

    /*
        Excepciones
    */

    class CuadradoException extends Exception {}

    class Cuadrado {
        protected $lado;

        function __construct($lado) {
            if  ($lado > 0) {
                $this->lado = $lado;
            } else {
                throw new CuadradoException("Lado incorrecto. Debe ser mayor que cero.", 1);

            }
        }
    }

    try {
        $c = new Cuadrado(5);
        var_dump($c);
    } catch (CuadradoException $e) {
        echo "Excepcion Cuadrado: " . $e->getMessage();
    } catch (Exception $e) {
        echo "Excepcion: " . $e->getMessage();
    } catch (Error $err){
        echo "Error: ". $err->getMessage();
        echo "Error extend:". $err->getTrace();
    }finally{
        echo " Fin.";
    }
?>