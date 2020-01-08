<?php


namespace App\Classes;

use App\Interfaces\AbstractProduct;
use App\Interfaces\AbstractFactoryInterface;

class ConcreteFactory2 implements AbstractFactoryInterface
{

    public function createProduct(): AbstractProduct
    {
        return new ConcreteProduct2;
    }
}
