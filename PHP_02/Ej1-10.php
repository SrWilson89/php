<!--

var_dump SIRVE PARA COMPROBAR EL TIPO DE LA BARIABLE
ECHO ES IGUAL A DOCUMEN.WRITE

-->

<?php

echo '<h2>Ejercicio 1 </h2>';
//string
echo 'Esto es una cadena sencilla <br>';

//integer
echo 9;
echo '<br>';

//float
echo 20.32;
echo '<br>';

//boolean
echo true;
echo '<br>';

echo '<h2>Ejercicio 2 </h2>';

$num1= 8;
$num2= 10;

$suma=$num1+$num2;
$resta=$num1-$num2;
$multiplicar=$num1*$num2;
$dividir=$num1/$num2;

echo "$num1 + $num2 = $suma <br>";
echo "$num1 - $num2 = $resta <br>";
echo "$num1 * $num2 = $multiplicar <br>";
echo "$num1 / $num2 = $dividir <br>";

echo '<h2>Ejercicio 3 </h2>';
$num1=rand(0,100);

if($num1>=18){
    echo "Con $num1 eres mayor de edad <br>";
}else{
    echo "Con $num1 eres menor de edad <br>";
}

echo '<h2>Ejercicio 4 </h2>';

$palabra="suspenso";

if($palabra=="aprobado"){
    echo "tu  nota es $palabra felicidades <br>";
}else{
    echo "tu  nota es $palabra tienes que estudiar mas <br>";
}

// $palabra="aprobado";

// if($palabra=="aprobado"){
//     echo "tu  nota es $palabra felicidades <br>";
// }else{
//     echo "tu  nota es $palabra tienes que estudiar mas <br>";
// }

echo '<h2>Ejercicio 5</h2>';

$num1=rand(0,10);

if($num1>=5){
    echo "tu  nota es $num1 felicidades has aprobado <br>";
}else{
    echo "tu  nota es $num1 tienes que estudiar mas <br>";
}

echo '<h2>Ejercicio 6</h2>';

$num1=rand(0,100);

if($num1>=15 && $num1<=25){
    echo "tu  numero $num1 esta comprendido entre el 15 y 25 <br>";
}else{
    echo "tu  numero $num1 NO esta entre el 15 y 25 <br>";
}

echo '<h2>Ejercicio 7</h2>';
$num1=rand(1,7);

if($num1==1){
    echo "el numero $num1 corresponde al dia lunes<br>";
}elseif($num1==2){
    echo "el numero $num1 corresponde al dia martes<br>";
}elseif($num1==3){
    echo "el numero $num1 corresponde al dia miercoles<br>";
}elseif($num1==4){
    echo "el numero $num1 corresponde al dia jueves<br>";
}elseif($num1==5){
    echo "el numero $num1 corresponde al dia viernes<br>";
}elseif($num1==6){
    echo "el numero $num1 corresponde al dia sabado<br>";
}elseif($num1==7){
    echo "el numero $num1 corresponde al dia domingo<br>";
}

echo '<h2>Ejercicio 8</h2>';
$activo=true;

if($activo==false){
    echo "Inactivo";
}else{
    echo "Activo";
}

echo '<h2>Ejercicio 9</h2>';
$num1=rand(1,70);
$num2=rand(1,70);

if($num1>$num2){
    echo "El numero 1 $num1 es mas grande que el numero 2 $num2<br>";
}else{
    echo "El numero 2 $num2 es mas grande que el numero 1 $num1<br>";
}

echo '<h2>Ejercicio 10</h2>';
$num1=rand(1,70);
$num2=rand(1,70);
$num3=rand(1,70);

if($num1>$num2){
    if($num1>$num3){
        echo "El numero1 $num1 es mas grande que el numero2 $num2 y numero3 $num3 <br>";
    }else{
        echo "El numero3 $num3 es mas grande que el numero1 $num1 y numero2 $num2 <br>";
    }
}else{
    if($num2>$num3){
        echo "El numero2 $num2 es mas grande que el numero1 $num1 y numero3 $num3 <br>";
    }else{
        echo "El numero3 $num3 es mas grande que el numero1 $num1 y numero2 $num2 <br>";
    }
}
?>