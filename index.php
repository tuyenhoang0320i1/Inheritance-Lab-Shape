<?php
include_once('Circle.php');
include_once('Cylinder.php');
include_once('Rectangle.php');
include_once('Square.php');

$circle = new Circle('Circle 01',5);
echo 'Circle name: ' . $circle->show() . '</br>';
echo 'My area : ' . $circle->getArea() . '</br>';
echo 'My perimeter: ' . $circle->getPerimeter() . '</br>' . '</br>';

$cylinder = new Cylinder('Cylinder 01',5,2);
echo 'Cylinder name: ' . $cylinder->show() . '</br>';
echo 'My area: ' . $cylinder->getArea() . '</br>';
echo 'My perimeter: ' . $cylinder->getPerimeter() . '</br>';
echo 'My volume: ' . $cylinder->getVolume() . '</br>' . '</br>';

$rectangle = new Rectangle('Rectangle 01', 5, 3);
echo 'Rectangle name: ' . $rectangle->show() . '</br>';
echo 'My area: ' . $rectangle->getArea() . '</br>';
echo 'My perimeter: ' . $rectangle->getPerimeter() . '</br>' . '</br>';

$square = new Square('Square 01', 5);
echo 'Square name: ' . $square->show() . '</br>';
echo 'My area: ' . $square->getArea() . '</br>';
echo 'My perimeter: ' . $square->getPerimeter() . '</br>';

