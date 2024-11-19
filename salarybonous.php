<?php
$name = 'Juyel';
$salary = 500.00;
$sell = intval(1030);
$money = $sell*15/100;
$bonous = number_format($salary + $money,'2','.','');
echo "TOTAL = R$ ".$bonous."\n";
?>
