<?php

namespace Figuras;

/**
 * # Class Triangulo
 * 
 * ## Estilos de letra
 * Podemos marcar texto como negrita colocandolo entre **dobles asteriscos**.
 * Usando el _guion bajo_ o *un asterisco* indicamos que el texto debe estar en cursiva/subrayado.
 * 
 * Tambien podemos usar etiquetas de HTML:
 * * <i>Esto es cursiva</i>
 * * <b>Negrita</b>
 * * <u>Subrayado</u>
 *  
 * ## Lista de elementos
 * Para realizar una lista de elementos procedemos así:
 * * item 1
 * * item 2
 * * item 3
 * 
 * Para listas enumeradas:
 * 1. Primer item
 * 2. Segundo item
 * 3. Tercer item
 * 
 * ## Codigo de ejemplo
 * Para poner ejemplos de código debemos hacerlo de la siguiente manera:
 * ```
 * // Esto es un ejemplo de uso
 * $tri = new Triangulo();
 * ```
 * 
 * Bloques para citas:
 * > Esto es un bloque de cita.
 * 
 */
class Triangulo extends Figura {
    function area(): float {
        throw new \Exception("Method not implemented");
    }

    function perimetro(): float {
        throw new \Exception("Method not implemented");
    }

    /**
     * devielve la suma de los numeros de un array 
     * 
     * @param int[] $numeros Lista de numeros a sumar
     */

    function sumaArray(array $numeros){

    }
}
