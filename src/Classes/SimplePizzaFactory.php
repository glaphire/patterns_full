<?php


namespace App\Classes;


class SimplePizzaFactory
{
    protected $pizza;

    public function createPizza($type)
    {
        switch ($type) {
            case "veggie":
                $this->pizza = new VeggiePizza();
                break;
            case "pepperoni":
                $this->pizza = new PepperoniPizza();
                break;
            default:
                throw new \Exception("Undefined pizza type requested");
        }

        return $this->pizza;
    }
}

