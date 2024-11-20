<?php
    class Rectangle{
        public $length;
        public $width;

        public function __construct($l,$w){
            $this->length = $l;
            $this->width = $w;
        }
        public function areaRectangle(){
            $area = $this->length * $this->width;
            echo "Area Of rectangle :" . $area ."<br>";
            return $area;
        }

        public function sum($area){
            $sum = 2 *($this->length + $this->width);
            echo "Perimeter is : " .$sum + $area;
        }
    }

    $obj = new Rectangle(7,8);
    $area = $obj->areaRectangle();
    $obj->sum($area);
?>