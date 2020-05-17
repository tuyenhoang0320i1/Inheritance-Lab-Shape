<?php
include_once('Shape.php');

class Rectangle extends Shape
{
    protected $width;
    protected $height;

    public function __construct($name, $width, $height)
    {
        parent::__construct($name);
        $this->width = $width;
        $this->height = $height;
    }

    public function getArea()
    {
        return $this->width * $this->height;
    }

    public function getPerimeter()
    {
        return ($this->width + $this->height) * 2;
    }
}