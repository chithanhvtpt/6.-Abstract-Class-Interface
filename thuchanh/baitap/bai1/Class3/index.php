<?php
include_once 'Square.php';
include_once 'Rectangle.php';
include_once 'Circle.php';

$square = new Square();
$rectangle = new Rectangle();
$circle = new Circle();
echo 'Side of square : '. $square->resize() . '<br>';
echo 'Side of rectangle : '. $rectangle->resize().  '<br>';
echo 'radius of circle : '. $circle->resize();
