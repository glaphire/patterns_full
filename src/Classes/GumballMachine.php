<?php

namespace App\Classes;

use App\Interfaces\State;

class GumballMachine
{
    private State $soldOutState;
    private State $noQuarterState;
    private State $hasQuarterState;
    private State $soldState;

    private State $state;

    private int $count = 0;

    public function __construct(int $numberGumballs)
    {
        $this->soldOutState = new SoldOutState($this);
        $this->noQuarterState = new NoQuarterState($this);
        $this->hasQuarterState = new HasQuarterState($this);
        $this->soldState = new SoldState($this);
        $this->count = $numberGumballs;

        if ($numberGumballs > 0) {
            $this->state = $this->noQuarterState;
        }
    }

    public function insertQuarter()
    {
        $this->state->insertQuarter();
    }

    public function ejectQuarter()
    {
        $this->state->ejectQuarter();
    }

    public function turnCrank()
    {
        $this->state->turnCrank();
        $this->state->dispense();
    }

    public function setState(State $state)
    {
        $this->state = $state;
    }

    public function releaseBall()
    {
        echo "A gumball comes rolling out the slot...";
        if ($this->count != 0) {
            $this->count = $this->count - 1;
        }
    }

    public function getNoQuarterState()
    {
        return $this->noQuarterState;
    }

    public function getHasQuarterState()
    {
        return $this->hasQuarterState;
    }

    public function getSoldOutState()
    {
        return $this->soldOutState;
    }

    public function getSoldState()
    {
        return $this->soldState;
    }

    public function getCount()
    {
        $this->getCount();
    }


    public function refill(int $count)
    {
        $this->count += $count;
        echo "The gumball machine was just refilled; it's new count is: " . $this->count;
        $this->state->refill();
    }

    public function __toString()
    {
        $result = "\nMighty Gumball, Inc."
            . "\nPHP-enabled Standing Gumball Model #2004"
            . "\nInventory: " . $this->count . " gumball";

        if ($this->count != 1) {
            echo "s";
        }

        echo "\nMachine is " . $this->state . "\n";

        return $result;
    }
}
