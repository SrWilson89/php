<?php
echo '<h2>Ejercicio 26</h2>';

for($x=0; $x<1000; $x++){
    $num= rand(1, 10);
    $raiNum[]=$num;
}

$num1=0;
$num2=0;
$num3=0;
$num4=0;
$num5=0;
$num6=0;
$num7=0;
$num8=0;
$num9=0;
$num10=0;

for($x=0; $x<count($raiNum); $x++){
    if($raiNum[$x]==1){
        $num1++;
    }elseif($raiNum[$x]==2){
        $num2++;
    }elseif($raiNum[$x]==3){
        $num3++;
    }elseif($raiNum[$x]==4){
        $num4++;
    }elseif($raiNum[$x]==5){
        $num5++;
    }elseif($raiNum[$x]==6){
        $num6++;
    }elseif($raiNum[$x]==7){
        $num7++;
    }elseif($raiNum[$x]==8){
        $num8++;
    }elseif($raiNum[$x]==9){
        $num9++;
    }elseif($raiNum[$x]==10){
        $num10++;
    }    
}

echo "Del numero 1 hay un total de $num1<br>";
echo "Del numero 1 hay un total de $num2<br>";
echo "Del numero 1 hay un total de $num3<br>";
echo "Del numero 1 hay un total de $num4<br>";
echo "Del numero 1 hay un total de $num5<br>";
echo "Del numero 1 hay un total de $num6<br>";
echo "Del numero 1 hay un total de $num7<br>";
echo "Del numero 1 hay un total de $num8<br>";
echo "Del numero 1 hay un total de $num9<br>";
echo "Del numero 1 hay un total de $num10<br>";

echo '<h2>Ejercicio 27</h2>';
$num1= rand(1, 1000);
$num2= rand(1, 1000);

$suma= $num1+$num2;

echo "$num1 + $num2 = $suma";

?>