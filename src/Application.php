<?php

namespace App;

use App\Classes\PizzaStore;

class Application
{
    public function run()
    {
        $store = new PizzaStore();

        $store->orderPizza("pepperoni");
    }
}
