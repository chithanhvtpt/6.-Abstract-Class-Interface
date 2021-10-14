<?php
include_once('Shape.php');
include_once('Circle.php');
include_once('Cylinder.php');
include_once('Rectangle.php');
include_once('Square.php');

//$circle[0] = new Circle('Circle 01', 3);
//echo 'Circle area: ' . $circle->calculateArea() . '<br />';
//echo 'Circle perimeter: ' . $circle->calculatePerimeter() . '<br />';
//
//$cylinder[1] = new Cylinder('Cylinder 01', 3, 4);
//echo 'Cylinder area: ' . $cylinder->calculateArea() . '<br />';
//echo 'Cylinder perimeter: ' . $cylinder->calculatePerimeter() . '<br />';
//
//$rectangle[2] = new Rectangle('Rectangle 01', 3, 4);
//echo 'Rectangle area: ' . $rectangle->calculateArea() . '<br />';
//echo 'Rectangle perimeter: ' . $rectangle->calculatePerimeter() . '<br />';
//
//$square[4] = new Square('Square 01', 4);
//echo 'Rectangle area: ' . $square->calculateArea() . '<br />';
//echo 'Rectangle perimeter: ' . $square->calculatePerimeter() . '<br />';

$shape[0] = new Circle('Circle', 0);
$shape[1] = new Cylinder('Cylinder',0, 5);
$shape[2]= new Rectangle('Rectangle',0, 5);
$shape[3] = new Square('Square', 0);

//var_dump($shape);

foreach ($shape as $key => $hinh) {
//    var_dump($hinh);
    if ($hinh instanceof Square) {
        echo $hinh->howtoColor(). ' ';
    }
}
