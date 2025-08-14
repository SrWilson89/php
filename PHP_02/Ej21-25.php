<?php

echo '<h2>Ejercicio 21</h2>';

$msieteyonce;

for($x=0 ; $x<=1000; $x++){

    $y=rand(1,100);

    if($y%7==0 || $y%11==0){
        $msieteyonce[]=$y;
    }
}

for($x=0 ; $x<count($msieteyonce); $x++){
    echo "$msieteyonce[$x], "; 
}

echo '<h2>Ejercicio 22</h2>';

for($x=0 ; $x<=10; $x++){
    $tres=3;
    $resultado=$tres*$x;
    echo"$tres * $x = $resultado<br>";
}

echo '<h2>Ejercicio 23</h2>';

$num=rand(1,100);

for($x=0 ; $x<=10; $x++){
    
    $resultado=$num*$x;
    echo"$num * $x = $resultado<br>";
}

echo '<h2>Ejercicio 24</h2>';

do{
    $num = rand(0, 30);
    echo "$num, ";
} while ($num==0);

echo "Fin while";

echo '<h2>Ejercicio 25</h2>';

for($x=0 ; $x<=10; $x++){
    $num=rand(1,100);
    $suma[]=$num;
}

$resultado=0;

for($x=0 ; $x<=10; $x++){

    if($x<10){
        echo "$suma[$x] +";  
    }else{
        echo "$suma[$x] = ";
    }
    

    $resultado+=$suma[$x];
}
    echo "$resultado"

?>