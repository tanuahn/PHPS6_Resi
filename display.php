<?php
include_once "Circle.php";
include_once "Resizeable.php";
include_once "Rectangle.php";
include_once "Square.php";

echo "Circle" . "<br/>";
$circle = new Circle();
$circle->setRadius(4);
echo $circle->calculateArea() . "<br/>";
echo "After resize" . "<br/>";
echo $circle->resize(20) . "<br/>";
echo "Rectangle" . "<br/>";
$rectangle = new Rectangle(4, 5);
echo $rectangle->calculateArea() . "<br/>";
echo "After resize" . "<br/>";
echo $rectangle->resize(20) . "<br/>";
echo "Square" . "<br/>";
$square = new Square(5);
echo $square->calculateArea() . "<br/>";
echo "After resize" . "<br/>";
echo $square->resize(20) . "<br/>";