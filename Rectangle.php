<?php
include_once "Resizeable.php";

class Rectangle implements Resizeable
{
    public $width;
    public $height;

    public function __construct($height,$width)
    {
        $this->height = $height;
        $this->width = $width;
    }
    public function calculateArea(){
        return $this->height * $this->width;
    }
    public function calculatePerimeter(){
        return ($this->height + $this->width) * 2;
    }
    public function resize($percent)
    {
        return $this->calculateArea() + ($this->calculateArea())*$percent/100;
    }
}