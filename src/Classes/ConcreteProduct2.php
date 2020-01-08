<?php


namespace App\Classes;


use App\Interfaces\AbstractProduct;

class ConcreteProduct2 implements AbstractProduct
{
    public function usefulFunction()
    {
        echo static::class . " is called.\n";
    }
}
