<?php

namespace App\Classes;

use App\Interfaces\State;

class SoldOutState implements State
{
    private GumballMachine $gumballMachine;

    /**
     * SoldOutState constructor.
     * @param $gumballMachine
     */
    public function __construct(GumballMachine $gumballMachine)
    {
        $this->gumballMachine = $gumballMachine;
    }

    public function insertQuarter()
    {
        echo "You can't insert a quarter, the machine is sold out.\n";
    }

    public function ejectQuarter()
    {
        echo "You can't eject, you haven't inserted a quarter yet.\n";
    }

    public function turnCrank()
    {
        echo "You turned, but there are no gumballs.\n";
    }

    public function dispense()
    {
        echo "No gumball dispensed.\n";
    }

    public function refill()
    {
        $this->gumballMachine->setState($this->gumballMachine->getNoQuarterState());
    }
}

