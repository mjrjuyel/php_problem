<?php
$pro = array(23,1,10.00);
echo "<br>";
$pro1 = array(23,1,120.00);
$total_pay= $pro[1]*$pro[2] + $pro1[1]*$pro1[2];
echo "VALOR A PAGAR: R$ ".number_format($total_pay,'2','.','')."\n";
?>