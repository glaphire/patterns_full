<?php


namespace App\Classes;


use App\Interfaces\AbstractProductA;

class ConcreteProductA2 implements AbstractProductA
{
    public function usefulFunctionA()
    {
        echo static::class . " is called.\n";
    }
}
