<?php
// require('circle.php');


// Circle Class Call Here

// $obj = new Circle(10);
// $obj->circleArea();

// Shape Class Object Below 
require('shape.php');
$rectangle = new Rectangle(5,5);
$obj->calculateArea();
echo "<br>";
$obj->circleFunction();
$circle = new Circle(10);
$circle->calculateArea();
?>