<?php


namespace App\Classes;


use App\Interfaces\AbstractProduct;

class ConcreteProduct1 implements AbstractProduct
{
    public function usefulFunction()
    {
        echo static::class . " is called.\n";
    }
}
