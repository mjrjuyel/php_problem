<?php
    class Circle{
        public $pi = 3.1415;
        public $radius;

        public function __construct($r){
            $this->radius = $r;
        }

        public function circleArea(){
            $area = $this->pi * pow($this->radius,2);
            echo "The area of a circle is : " .number_format($area,'5','.','')."<br>";
        }

        public function circleCircumference(){
            $perimeter = 2* $this->pi * $this->radius;
            echo "The circumference is : " . $perimeter;
        }
    }
?>