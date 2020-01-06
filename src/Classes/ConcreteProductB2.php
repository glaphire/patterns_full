<?php


namespace App\Classes;


use App\Interfaces\AbstractProductB;

class ConcreteProductB2 implements AbstractProductB
{
    public function usefulFunctionB()
    {
        echo static::class . " is called.\n";
    }
}
