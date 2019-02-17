<?php
include_once "Rectangle.php";
class Square implements Resizeable
{
    public $width;
    public $height;
    public function __construct($width)
    {

        $this->width = $width;
    }
    public function calculateArea(){
        return $this->width * $this->width;
    }
    public function calculatePerimeter(){
        return $this->width* 4;
    }
    public function resize($percent)
    {
        return $this->calculateArea() + ($this->calculateArea())*$percent/100;
    }
}