<?php

echo '<h2>Ejercicio 11</h2>';
$num1=rand(1,50);
$num2=rand(1,50);

$resultado=$num1/$num2;

if($num1 % $num2==0){
    echo "el $num1 / $num2 el cociente es entero <br>";
}else{
    echo "el $num1 / $num2 el cociente no $resultado es entero <br>";
}

echo '<h2>Ejercicio 12</h2>';
$num1=rand(1,100);

if($num1%3==0){
    if($num1%5==0){
        echo "$num1 FizzBuzz<br>";
    }
    else{
        echo "$num1 Fizz<br>";
    }
}elseif($num1%5==0){
    echo "$num1 Buzz<br>";
}else{
    echo "$num1 no se puede dividir entre 3 o 5<br>";
}

echo '<h2>Ejercicio 13</h2>';
$dias =["Lunes", "Martes", "Miercoles" , "Jueves" , "Viernes", "Sabado", "Domingo"];

for($x=0 ; $x<count($dias); $x++){
    echo "$dias[$x], ";
}

echo '<h2>Ejercicio 14</h2>';

$frutas =["manzana", "mandarina", "pera" , "plátano" , "fresa"];

$num1=rand(0,(count($frutas)-1));

echo "$frutas[$num1]<br>";

echo '<h2>Ejercicio 15</h2>';

$animales =["perro", "gato", "tortuga"];
echo "$animales[1]<br>";
$animales[]="elefante";
echo "$animales[3]<br>";
$animales[2]="camello";
echo "$animales[2]<br>";
var_dump($animales);
echo "<br>";
$animales2 = $animales[0];
$animales[0]=$animales[2];
$animales[2]=$animales2;
var_dump($animales);


echo '<h2>Ejercicio 16</h2>';

$i = 1;
while ($i <= 100) {
    echo $i . ", ";
    $i++;
}

echo '<h2>Ejercicio 17</h2>';

$i = 0;
while ($i <= 100) {
    if($i%2==0){
    echo $i . ", ";
    }
    $i++;
}

echo '<h2>Ejercicio 18</h2>';

$i = rand(1, 50);
$x=1;
while ($x < 10) {
    $numeros[]=$i;
    $i = rand(1, 50);
    $x++;
}

for($x=0 ; $x<count($dias); $x++){
    if($x<(count($dias)-1)){
        echo "$numeros[$x], ";   
    }else{
        echo "$numeros[$x]";
    }    
}

echo '<h2>Ejercicio 19</h2>'; //revisar

$x=1;
$y=1;

for($x=0 ; $x<40; $x++){
    if($x%2==0){
        $numerosPar[]=$x;
    }
}

for($x=0 ; $x<count($numerosPar); $x++){
    echo "$numerosPar[$x], "; 
}

echo "<br>";

echo count($numerosPar);

echo '<h2>Ejercicio 20</h2>';

for($x=0 ; $x<=500; $x++){
    if($x%3==0){
        $Dentres[]=$x;
    }
}

for($x=0 ; $x<count($Dentres); $x++){
    echo "$Dentres[$x], "; 
}

?>