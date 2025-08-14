<?php
/*Crear una clase Libro que contenga los siguientes atributos:

ISBN
Titulo
Autor
Número de páginas

Crea el método info() para mostrar la información relativa 
al libro con el siguiente formato:
“El libro con ISBN creado por el autor tiene páginas”

En el fichero principal (index.php), crear 2 objetos Libro 
(los valores que se quieran) y escribe sus datos en la web.
Indica cuál de los dos tiene más páginas.
(2’5 ptos)

Crea una colección de libros. La colección debe tener un nombre 
y debemos poder añadir libros a la colección y saber cuantos hay.
En el index.php crea una colección y añade los libros creados anteriormente. 
Escribe cuantos libros hay.
(2’5 ptos)*/

include_once "Libro.php";
include_once "ColeccionLibros.php";

$libro1=new Libro("11111111-1","El temor del hombre sabio", "Patrick Rothfuss", 1190);
$libro2=new Libro("22222222-2","El imperio final", "Brandon Sanderson", 541);

$libro1->info();
$libro2->info();

$libro1->comparar($libro2);
$libro2->comparar($libro1);

$libros=[];
$coleccion1= new ColeccionLibros("Coleccion1",$libros);
$coleccion1->agregarLibro($libro1);
$coleccion1->agregarLibro($libro2);
$coleccion1->contarLibros();


