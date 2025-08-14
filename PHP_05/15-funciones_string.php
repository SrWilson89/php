<?php
    /*
        FUNCIONES PREDEFINIDAS
        MANIPULANDO STRING (CADENAS DE CARACTERES)
    */

    echo "<h4>PROCESAMIENTO DE CADENAS DE CARACTERES</h3>";
    /*
        strlen(string $string);
        Devuelve la longitud de una cadena
    */
    $cadena = "Aprendiendo PHP";
    echo "\"$cadena\" tiene una longitud de " . strlen($cadena) . " letras.<br />";
    echo "<hr />";
    /*
        substr( string $string , int $start [, int $length ] ) : string
        Devuelve una subcadena
    */
    // Devuelve toda la cadena
    echo substr($cadena, 0)."<br />"; 
    // Devuelve la subcadena "diendo PHP"
    echo substr($cadena, 5)."<br />";
    // Devuelve la subcadena "die"
    echo substr($cadena, 5, 3)."<br />";
    // Devuelve la subcadena "PHP"
    echo substr($cadena, -3)."<br />";
    // Devuelve la subcadena "do P"
    echo substr($cadena, -6, 4)."<br />";
    echo "<hr />";
    /*
        strstr ( string $haystack 
            , mixed $needle [
            , bool $before_needle = FALSE ] ) : string
        Devuelve parte del string haystack iniciando desde e
        incluyendo la primera aparición de needle (aguja)
        hasta el final del haystack (pajar).
    */

    // Devuelve "endiendo PHP"
    echo strstr($cadena, "en")."<br />";
    // Devuelve "Apr"
    echo strstr($cadena, "en", true)."<br />";
    
    echo "<hr />";
    /*
        str_replace ( mixed $search , mixed $replace 
            , mixed $subject [, int &$count ] ) : mixed
        Reemplaza todas las apariciones del string
        buscado con el string de reemplazo
    */

    echo str_replace("PHP", "php", $cadena)."</br>";
    $count = 1;
    echo str_replace("en", "EN", $cadena, $count)."</br>";

    $vowels = array("a", "e", "i", "o", "u", "A", "E", "I", "O", "U");
    $onlyconsonants = str_replace($vowels, "", "Hello World of PHP");
    echo "$onlyconsonants<br />";
    echo "<hr />";
    /*
        trim ( string $str [
            , string $character_mask = " \t\n\r\0\x0B" ] ) : string
        Elimina espacio en blanco (u otro tipo de caracteres)
        del inicio y el final de la cadena
    */

    $text   = "\t\tThese are a few words :) ...  ";
    $binary = "\x09Example string\x0A";
    $hello  = "Hello World";
    var_dump($text, $binary, $hello);

    echo "<br />";

    $trimmed = trim($text);
    var_dump($trimmed);
    $trimmed = trim($binary);
    var_dump($trimmed);
    $trimmed = trim($hello);
    var_dump($trimmed);
    echo "<hr />";
    
    /*
        strtolower ( string $string ) : string
        Convierte una cadena a minúsculas.
    */

    echo strtolower($cadena)."<br />";

    echo "<hr />";

    /*
        strtoupper ( string $string ) : string
        Convierte un string a mayúsculas.
    */

    echo strtoupper($cadena)."<br />";
    
    echo "<hr />";

    /*
        stripos ( string $haystack , string $needle 
            [, int $offset = 0 ] ) : mixed
        Encuentra la posición numérica de la primera
        aparición de needle (aguja) en el string haystack (pajar). 
        A diferencia de strpos(), stripos() no considera
        las mayúsculas ni las minúsculas. 

    */

    echo stripos($cadena, "php");
    echo "<hr />";

    /*
        strpos ( string $haystack 
            , mixed $needle [, int $offset = 0 ] ) : mixed
        Encuentra la posición numérica de la primera ocurrencia
        del needle (aguja) en el string haystack (pajar). 
    */

    echo strpos($cadena, "PHP");
    echo "<hr />";

    /*
        str_word_count ( string $string 
            [, int $format = 0 
            [, string $charlist ]] ) : mixed
        Devuelve información sobre las palabras utilizadas en un string 
    */

    echo str_word_count($cadena);
    echo "<hr />";

    /*
        str_pad ( string $input , int $pad_length 
            [, string $pad_string = " " 
            [, int $pad_type = STR_PAD_RIGHT ]] ) : string
        Esta función devuelve el string input rellenado
        por la izquierda, la derecha, o en ambos lados 
        hasta la longitud especificada. Si el argumento
        opcional pad_string no se suministra, el input
        se rellena con espacios, de lo contrario,
        se rellena con los caracteres de pad_string
        hasta el límite.
    */
    $palabra = "Estudiando";
    echo str_pad($palabra, 20, "_") . "<br />";
    echo str_pad($cadena, 20, "_") . "<br />";

?>