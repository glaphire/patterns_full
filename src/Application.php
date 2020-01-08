<?php

namespace App;

use App\Classes\ConcreteFactory1;
use App\Classes\ConcreteFactory2;

class Application
{
    public function run()
    {
        (new ConcreteFactory1())->createProduct()->usefulFunction();
        (new ConcreteFactory2())->createProduct()->usefulFunction();
    }
}
