<?php
$given_date = new DateTime('2020-12-15');

echo $given_date->format('Y');
if($given_date->format('Y') % 4 == 0 || $given_date->format('Y')%400 == 0){
	echo "The Date Is leef Year";
}

$date = '2024-10-12';

$add5 = date('y-m-d',strtotime($date.'+5 days'));

echo "<br>" . $add5;
?>