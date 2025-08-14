<?php

echo '<h2>Ejercicio 28</h2>';



echo '<h2>Ejercicio 29</h2>';

for($x=0; $x<10; $x++){
    $num= rand(1, 10);
    $raiNum[]=$num;
}

for($x=0; $x<count($raiNum); $x++){
    $numero5=0;

    echo "$raiNum[$x] ";

    if($raiNum[$x]==5){
        $numero5++;
    }
}

echo "<br>";

echo "$numero5 <br>";

echo '<h2>Ejercicio 30</h2>';

echo '<h2>Ejercicio 31</h2>';

for($x=0; $x<100; $x++){
    $num= rand(1, 100);
    $raiNum1[]=$num;
}

$numeros=0;
$numeros2=0;
$numeros2c=0;

for($x=0; $x<count($raiNum1); $x++){    

    $numeros+=$raiNum1[$x];

    if($raiNum1[$x]>25 && $raiNum1[$x]<75){
        $numeros2+=$raiNum1[$x];
        $numeros2c++;
    }    
}

$numerosT=$numeros/count($raiNum1);
echo "$numerosT <br>";

$numeros2T=$numeros2/$numeros2c;
echo "$numeros2T <br>";

echo '<h2>Ejercicio 32</h2>';

$num= rand(50, 200);
$dto=0;

if($num>60){
    $dto=5; 
}elseif($num%13==0){
    $dto=10;
}

$resultado=$num-($num*$dto/100);

echo "$num * $dto% = $resultado <br>";

echo '<h2>Ejercicio 33</h2>';
$num= rand(-25, 60);

for($x=0; $x<100; $x++){
    $num= rand(1, 100);
    $raiNum2[]=$num;
}

//FALTAN COSAS

echo '<h2>Ejercicio 34</h2>';

echo '<h2>Ejercicio 35</h2>';

for($x=1; $x<=10000; $x++){
    if($x%2==0){
        echo "$x, ";
    }    
}
echo "<br>";

echo '<h2>Ejercicio 36</h2>';
$numero=5;
$factorial = 1; 

for ($i = 1; $i <= $numero; $i++){ 
    $factorial = $factorial * $i; 
    
} 
echo $factorial;

echo '<h2>Ejercicio 37</h2>';

echo '<h2>Ejercicio 38</h2>'; 

echo '<h2>Ejercicio 39</h2>'; 
    


?>