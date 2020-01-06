<?php


namespace App\Classes;

use App\Interfaces\AbstractProductA;
use App\Interfaces\AbstractProductB;
use App\Interfaces\AbstractFactoryInterface;

class ConcreteFactory1 implements AbstractFactoryInterface
{

    public function createProductA(): AbstractProductA
    {
        return new ConcreteProductA1;
    }

    public function createProductB(): AbstractProductB
    {
        return new ConcreteProductB1;
    }
}
