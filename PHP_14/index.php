<?php
    namespace Ejercicio014;

    include "libros.php";

    $libro1= new Libro("A4633485","La Rosa de los mares","Antonio Machado",205);
    $libro2= new Libro("A4656355","El faro","Antonio Ruiz",215);

    $libro1->imprimir();
    $libro2->imprimir();

    echo"<hr>";

    if($libro1->getPags()>$libro2->getPags()){
        echo "El libro " . $libro1->getTitulo() . " tiene mas paginas que el libro " . $libro2->getTitulo();
    }else if($libro1->getPags()<$libro2->getPags()){
        echo "El libro " . $libro2->getTitulo() . " tiene mas paginas que el libro " . $libro1->getTitulo();
    }else{
        echo "El libro " . $libro1->getTitulo() . " tiene las mismas paginas que " . $libro2->getTitulo();
    }

    echo"<hr>";

    $libros = [
        new Libro("A4656355","El Comienzo","Antonio Ruiz",200),
        new Libro("A4656356","El Nudo","Antonio Ruiz",250),
        new Libro("A4656357","El Desenlace","Antonio Ruiz",255),
    ];

    for ($i = 0; $i < count($libros); $i++) {
        $x=$i+1;
        echo "$x - ";
        echo $libros[$i]->imprimir();
    }

    echo"<hr>";

    array_push(
        $libros,
        new Libro("A4656370","Matatrolls","William King",200),
        new Libro("A4656371","Mataskavens","William King",220),
        new Libro("A4656372","Matademonios","William King",240),
        new Libro("A4656373","Matadragones","William King",260),
        new Libro("A4656374","Matabestias","William King",280)
    );

    for ($i = 0; $i < count($libros); $i++) {
        $x=$i+1;
        echo "$x - ";
        echo $libros[$i]->imprimir();
    }

    echo"<hr>";

    echo "El total de libros es: " . count($libros);

?>