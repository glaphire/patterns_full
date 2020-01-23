<?php

namespace App\Classes;

use App\Interfaces\State;

class NoQuarterState implements State
{
    private GumballMachine $gumballMachine;

    public function __construct(GumballMachine $gumballMachine)
    {
       $this->gumballMachine = $gumballMachine;
    }

    public function insertQuarter()
    {
        echo "You inserted a quarter\n";
        $this->gumballMachine->setState($this->gumballMachine->getHasQuarterState());
    }

    public function ejectQuarter()
    {
        echo "You haven't insert a quarter.\n";
    }

    public function turnCrank()
    {
        echo "You turned, but there is no quarter.\n";
    }

    public function dispense()
    {
        echo "You need to pay first.\n";
    }

    public function refill() {}

    public function __toString()
    {
        return "waiting for a quarter";
    }
}
