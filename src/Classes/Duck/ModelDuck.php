<?php


namespace App\Classes\Duck;


use App\Classes\Fly\FlyNoWay;
use App\Classes\Quack\Quack;

class ModelDuck extends AbstractDuck
{
    public function __construct()
    {
        $this->setFlyBehavior(new FlyNoWay());
        $this->setQuackBehavior(new Quack());
    }

    public function display()
    {
        print_r("I'm a model duck");
    }
}
