<?php


namespace App\Classes\Duck;


use App\Interfaces\FlyBehavior;
use App\Interfaces\QuackBehavior;

abstract class AbstractDuck
{
    protected $quackBehavior;

    protected $flyBehavior;

    public function __construct(QuackBehavior $quackBehavior, FlyBehavior $flyBehavior)
    {
        $this->quackBehavior = $quackBehavior;
        $this->flyBehavior = $flyBehavior;
    }

    public function performFly()
    {
        $this->flyBehavior->fly();
    }

    public function performQuack()
    {
        $this->quackBehavior->quack();
    }

    public function swim()
    {
        print_r("All ducks float, even decoys.");
    }

    abstract public function display();
}
