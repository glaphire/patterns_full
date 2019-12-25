<?php


namespace App\Classes;


class PizzaStore
{
    public function orderPizza(string $type)
    {
        $pizza = (new SimplePizzaFactory())->createPizza($type);

        $pizza->prepare();
        $pizza->bake();
        $pizza->cut();
        $pizza->box();

        return $pizza;
    }
}
