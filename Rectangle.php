<?php
namespace rectangle;
include_once ("shape.php");
use shape\Shape;
class Rectangle extends Shape
{
    public int $height;
    public int $width;
    public function __construct($name,$height,$width)
    {
        parent::__construct($name);
        $this->height = $height;
        $this->width = $width;
    }
    public function setHeight($height)
    {
        $this->height = $height;
    }
    public function getHeight()
    {
      return  $this->height;
    }
    public function setWidth($width)
    {
        $this->width = $width;
    }
    public function getWidth()
    {
        return  $this->width;
    }
    public function setchuvi()
    {
        $cv=($this->width + $this->height)*2;
        return $cv;
    }
    public function setdientich()
    {
        $dt=$this->width * $this->height;
        return $dt;
    }
}