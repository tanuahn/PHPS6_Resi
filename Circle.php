<?php

include_once "Resizeable.php";
class Circle implements Resizeable
{
    public $radius;

    public function setRadius($radius)
    {
        $this->radius = $radius;
    }


    public function getRadius()
    {
        return $this->radius;
    }
    public function calculateArea()
    {
        return pi() * pow($this->radius, 2);
    }

    public function calculatePerimeter()
    {
        return pi() * $this->radius * 2;
    }
   public function resize($percent)
   {
      return $this->calculateArea() + ($this->calculateArea())*$percent/100;
   }
}
?>
