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
        // TODO: Implement ejectQuarter() method.
    }

    public function turnCrank()
    {
        // TODO: Implement turnCrank() method.
    }

    public function dispense()
    {
        // TODO: Implement dispense() method.
    }

    public function __toString()
    {
        return "waiting for a quarter";
    }
}
