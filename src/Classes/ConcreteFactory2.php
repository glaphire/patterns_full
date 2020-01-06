<?php


namespace App\Classes;

use App\Interfaces\AbstractProductA;
use App\Interfaces\AbstractProductB;
use App\Interfaces\AbstractFactoryInterface;

class ConcreteFactory2 implements AbstractFactoryInterface
{

    public function createProductA(): AbstractProductA
    {
        return new ConcreteProductA2;
    }

    public function createProductB(): AbstractProductB
    {
        return new ConcreteProductB2;
    }
}
