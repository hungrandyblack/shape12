<?php
namespace cylinder;
include_once ("circle.php");
use circle\Circle;
class Cylinder extends Circle
{
    public int $height;

    public function __construct($name,$radius,$height)
    {
        parent::__construct($name,$radius);
        $this->height = $height;
    }
    public function setHeight($height)
    {
        $this->height = $height;
    }
    public function getHeight(Type $var = null)
    {
        return $this->height;
    }
    public function calculateArea()
    {
     return parent::calculateArea() * 2 + parent::calculatePerimeter() * $this->height;
    }

 public function calculateVolume()
    {
     return parent::calculateArea() * $this->height;
    }
}