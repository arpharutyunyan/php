<?php

    class Rectangle{

        public $length;
        public $width;

        public function getArea(){
            return $this->length * $this->width;
        }
    }

    $rec = new Rectangle();

    $rec->length = 10;
    $rec->width = 10;

    echo $rec->getArea();

?>