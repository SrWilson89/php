<?php

namespace Interfaces28;

// INTERFACES
spl_autoload_register(function ($class) {
    echo "Domain: $class<br>";
    $prefix = 'Interfaces28\\';
    $len = strlen($prefix);
    $name_class = substr($class, $len);
    $file = "$name_class.php";
    echo "File: $file<br>";
    if (file_exists($file)) {
        echo "Existe.<br>";
        require_once $file;
    }
});


$pato = new Pato();
$coche = new Coche();
