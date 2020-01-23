<?php

namespace App\Classes;

use App\Interfaces\State;

class SoldState implements State
{
    private GumballMachine $gumballMachine;

    public function __construct(GumballMachine $gumballMachine)
    {
        $this->gumballMachine = $gumballMachine;
    }

    public function insertQuarter()
    {
        echo "Please wait, we're already giving you a gumball.\n";
    }

    public function ejectQuarter()
    {
        echo "Sorry, you already turned the crank.\n";
    }

    public function turnCrank()
    {
        echo "Turning twice doesn't get you another gumball!\n";
    }

    public function dispense()
    {
        $this->gumballMachine->releaseBall();
        if ($this->gumballMachine->getCount() > 0) {
            $this->gumballMachine->setState($this->gumballMachine->getNoQuarterState());
        } else {
            echo "Oops, no gumballs!\n";
            $this->gumballMachine->setState($this->gumballMachine->getSoldOutState());
        }
    }

    public function refill() {}

    public function __toString()
    {
        return "dispensing a gumball";
    }
}