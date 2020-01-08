<?php


namespace App\Classes;

use App\Interfaces\AbstractProduct;
use App\Interfaces\AbstractProductB;
use App\Interfaces\AbstractFactoryInterface;

class ConcreteFactory1 implements AbstractFactoryInterface
{

    public function createProduct(): AbstractProduct
    {
        return new ConcreteProduct1;
    }
}
