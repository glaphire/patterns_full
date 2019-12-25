<?php


namespace App\Classes;


class SimplePizzaFactory
{
    protected $pizza;

    public function createPizza($type)
    {
        switch ($type) {
            case "veggie":
                $pizza = new VeggiePizza();
                break;
            case "pepperoni":
                $pizza = new PepperoniPizza();
                break;
            default:
                throw new \Exception("Undefined pizza type requested");
        }
    }
}

