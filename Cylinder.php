<?php
include_once('Circle.php');

class Cylinder extends Circle
{
    protected $height;

    public function __construct($name, $radius, $height)
    {
        parent::__construct($name, $radius);
        $this->height = $height;
    }

    public function getArea()
    {
        return parent::getArea() * 2 + parent::getPerimeter();
    }

    public function getVolume()
    {
        return parent::getArea() * $this->height;
    }
}