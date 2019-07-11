<?php


namespace App\Classes\Duck;


use App\Interfaces\FlyBehavior;
use App\Interfaces\QuackBehavior;

abstract class AbstractDuck
{
    /**
     * @var QuackBehavior $quackBehavior
     */
    protected $quackBehavior;

    /**
     * @var FlyBehavior $flyBehavior
     */
    protected $flyBehavior;

    public function setQuackBehavior(QuackBehavior $quackBehavior)
    {
        $this->quackBehavior = $quackBehavior;
    }

    public function setFlyBehavior(FlyBehavior $flyBehavior)
    {
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
