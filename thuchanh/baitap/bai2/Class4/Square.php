<?php
include_once 'Rectangle.php';
include_once '../InterfaceClass/Colorable.php';
class Square extends Rectangle implements Colorable
{
    public function __construct($name, $width)
    {
        parent::__construct($name, $width, $width);
    }
    public function howtoColor()
    {
        return 'Color all four sides';
    }
}