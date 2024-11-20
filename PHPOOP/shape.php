<?php
    abstract class Shape{
        public $height;
        public $width;
        
        abstract public function calculateArea();
    }

    class Rectangle extends Shape{
        public function __construct($h,$w){
            $this->height = $h;
            $this->width = $w;
        }

        public function calculateArea(){
            $area = $this->height * $this->width;
            echo "Area of a Rectangle : ".$area;
        }

        public function circleFunction(){
            $obj = new Circle($this->height);
            return $obj->calculateArea();
        }
    }

    class Circle extends Shape{
        public $radius;
        public $pi = 3.1415;

        public function __construct($d){
            $this->radius = $d;
        }

        public function calculateArea(){
            $area = $this->pi * pow($this->radius,2);

            echo "Area of a Circle " .$area;
        }
    }

    // $obj = new Rectangle(5,5);
    // $obj->calculateArea();
    // echo "<br>";
    // $obj->circleFunction();
?>