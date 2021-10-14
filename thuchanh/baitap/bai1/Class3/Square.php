<?php
include_once '../InterfaceClass3/Resizeable.php';
class Square implements Resizeable
{
    public function resize()
    {
        $side = mt_rand(0,10);
        return $side;
    }
}