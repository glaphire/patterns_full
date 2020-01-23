<?php


namespace App\Classes;


use App\Interfaces\State;

class HasQuarterState implements State
{
    private GumballMachine $gumballMachine;

    public function __construct(GumballMachine $gumballMachine)
    {
        $this->gumballMachine = $gumballMachine;
    }

    public function insertQuarter()
    {
        echo "You can't insert another quarter\n";
    }

    public function ejectQuarter()
    {
        echo "Quarter returned\n";
        $this->gumballMachine->setState($this->gumballMachine->getNoQuarterState());
    }

    public function turnCrank()
    {
        echo "You turned...\n";
        $this->gumballMachine->setState($this->gumballMachine->getSoldState());
    }

    public function dispense()
    {
        echo "No gumball dispensed.\n";
    }

    public function __toString()
    {
        return "waiting for turn a crank";
    }
}