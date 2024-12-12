<?php
date_default_timezone_set("Asia/Dhaka");
// One Ways To Sub or Add Days in a date
$input_date = '2024-12-11';
$object = new DateTime($input_date);
$object->modify('+5 days');
echo $object->format('y-m-d');

$sub = new DateTime($input_date);
$sub->modify('-5 days');
echo "<br>" . $sub->format('y-m-D') ."<br>";

// second ways
$date = new DateTime($input_date);
$interval = new DateInterval('P5D'); // 5 days Interval

$date->add($interval);

echo "<br>" . $date->format('m-y') . " : Date Add From Date time interval object <br>";

// get the current week days
 $day = date('N',strtotime($input_date));

 echo "Current day " .$day ."=". date('D-m-y',strtotime($input_date)) . "<br>";

if($sub->format('d') == date('d')){
	echo "present month " . date('M') . "<br";
}
?>