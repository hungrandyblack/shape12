<?php
namespace shape;
class Shape
{
    public $name = "";
    public function __construct($name = '')
    {
        $this->name = $name;
    }
    public function setName($name)
    {
        $this->name = $name;
    }
    public function getName()
    {
        return $this->name;
    }
}