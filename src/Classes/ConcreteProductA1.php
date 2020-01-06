<?php


namespace App\Classes;


use App\Interfaces\AbstractProductA;

class ConcreteProductA1 implements AbstractProductA
{
    public function usefulFunctionA()
    {
        echo static::class . " is called.\n";
    }
}
