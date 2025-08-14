<!-- <?php

echo "holi wiwiw";

?>

<h1>holaa</h1> -->

<?php

// VARIABLES EN PHP

$numero= 35;
var_dump($numero);
echo "<br> $numero <br>";

$nombre= "Pepe";
var_dump($nombre);
echo "<br> $nombre <br>";

$float = 34.52;
var_dump($float);
echo "<br> $float <br>";

$si = true;
var_dump($si);
echo "<br> $si <br>";

$no = false;
var_dump($no);
echo "<br> $no <br>";

// CONDICIONALES

$num=rand(15, 40); //ESTO ES EL MATH RAMDOM PERO PHP

/*
    > MAYOR
    < MENOR
    >= MAYOR O IGUAL
    <= MENOR O IGUAL
    != DISTINTO

    ES IGUAL QUE EN JAVA
*/

if($num===25){
    echo"Sacaste 25 FELICIDADES <br>";
}else{
    echo"fallaste sacando $num <br>";
};

if($num>=25){
    echo"Sacaste 25 o mas <br>";
}else{
    echo"fallaste sacando $num <br>";
};

if($num<=25){
    echo"Sacaste 25 o menos <br>";
}else{
    echo"fallaste sacando $num <br>";
};

//VARIAS EXPRESIONES

$num1=rand(15, 40);
$num2=rand(0, 10);

if($num1 >25 && $num2==5){
    echo" <br> $num1 es mayor que 25 y $num2 es igual a 5 <br>";
}else{
    echo"<br> lo siento $num1 y $num2 no cumple ambas caracteristicas <br>";
}

if($num1 >25 || $num2==5){
    echo"$num1 es mayor que 25 o $num2 es igual a 5 <br><br>";
}else{
    echo"lo siento $num1 y $num2 no cumple los minimos requisitos <br><br>";
}

//BUCLES

$y=150;

for($x=0 ; $x<=$y; $x+=2){
    
    if($x<$y ){
        echo "$x, ";
    }else{echo "$x";}
}

echo "<br><br>";

//ARRAY

$frutas =["Pera", "Manzana", "Limon" , "Sandia"];
$precio =[5, 8, 3, 15];

var_dump($frutas);
echo "<br>";

var_dump($precio);
echo "<br><br>";

for($x=0 ; $x<4; $x++){
    echo "$frutas[$x] a $precio[$x] €/kg <br>";
}

//ARRAY ASOCIATIVO

$asoc = [
    "nombre" => "Pepe",
    "edad" => 25,
    "direccion" => [
        "calle" => "C/ perico",
        "numero" => 25
    ]
];

$pilar = [
    "nombre" => "Pilar",
    "edad" => 25,
    "direccion" => [
        "calle" => "C/ perico",
        "numero" => 25
    ]
];
echo "<br>";
echo $pilar["direccion"]["calle"];
echo "<br>";
$personas = [$asoc, $pilar];
// var_dump($asoc);
echo $personas[1]["nombre"];
echo "<br><br>";

//BUCLE

$i = rand(1, 25);
while ($i < 20) {
    echo $i . ", ";
    $i = rand(1, 25);
}

// DO WHILE

do{
    $num = rand(0, 15);
    echo "$num, ";
} while ($num>0);
echo "Fin while";