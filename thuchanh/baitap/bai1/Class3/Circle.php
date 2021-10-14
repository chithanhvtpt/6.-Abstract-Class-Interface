<?php
include_once '../InterfaceClass3/Resizeable.php';

class Circle implements Resizeable
{
    public function resize()
    {
        $radius = mt_rand(0,10);
        return $radius;
    }
}