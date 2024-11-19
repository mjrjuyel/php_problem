<?php
$a=2;
$b=3;
$c=3;

// $a=floatval(rtrim($a,'\n'));
// $b=floatval(rtrim($a,'\n'));
// $c=floatval(rtrim($c,'\n'));
$pi=3.14159;

$triangle=0.5*$a*$b;
$circle=$pi*$c*$c;
$trapezium=0.5*($a+$b)*$c;
$square=$b*$b;
$rectangle=$a*$b;

echo "TRIANGULO:".number_format($triangle,3,'.','')."<br>";
echo "CIRCULO:".number_format($circle,3,'.','')."<br>";
echo "TRAPEZIO:".number_format($trapezium,3,'.','')."<br>";
echo "QUADRADO:".number_format($square,3,'.','')."<br>";
echo "RETANGULO:".number_format($rectangle,3,'.','')."<br>";
?>
