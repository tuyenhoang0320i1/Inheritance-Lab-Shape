<?php
include_once('Shape.php');

class Circle extends Shape
{
    protected $radius;

    public function __construct($name, $radius)
    {
        parent::__construct($name);
        $this->radius = $radius;
    }

    public function getArea()
    {
        return pi() * $this->radius * $this->radius;
    }

    public function getPerimeter()
    {
        return pi() * $this->radius * 2;
    }
}