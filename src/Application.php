<?php

namespace App;

use App\Interfaces\AbstractFactoryInterface;

class Application
{
    public function run(AbstractFactoryInterface $factory)
    {
        $factory->createProductA();
        $factory->createProductB();
    }
}
