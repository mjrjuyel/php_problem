<?php 

function totalDay($start,$end){

	$strStart = strtotime($start);
	$strEnd = strtotime($end);

	$diff = $strEnd - $strStart;

   echo $month = $diff/(30*86400);
}


$start = '2024-11-10';
$end = '2024-12-15';

totalDay($start,$end);
?>
