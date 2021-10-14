<?php
include_once 'Chicken.php';
include_once 'Tiger.php';

echo('----- Animals <br>');
$animals[0] = new Tiger();
$animals[1] = new Chicken();
foreach ($animals as $animal) {
    echo $animal->makeSound() . ' ';
    if ($animal instanceof Chicken) {
        echo $animal->howtoEat(). ' ';
    }
}
