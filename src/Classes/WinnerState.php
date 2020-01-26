<?php

namespace App\Classes;

use App\Interfaces\State;

class WinnerState implements State
{
    /**
     * @var GumballMachine
     */
    private GumballMachine $gumballMachine;

    public function __construct($gumballMachine)
    {
        $this->gumballMachine = $gumballMachine;
    }

    public function insertQuarter()
    {
        echo "Please wait, we're already giving you a Gumball.\n";
    }

    public function ejectQuarter()
    {
        echo "Please wait, we're already giving you a Gumball.\n";
    }

    public function turnCrank()
    {
        echo "Turning again doesn't get you another Gumball.\n";
    }

    public function dispense()
    {
        $this->gumballMachine->releaseBall();
        if ($this->gumballMachine->getCount() === 0) {
            $this->gumballMachine->setState($this->gumballMachine->getSoldOutState());
        } else {
            $this->gumballMachine->releaseBall();
            echo "YOU ARE A WINNER! You got two gumballs for your quarter.\n";

            if ($this->gumballMachine->getCount() > 0) {
                $this->gumballMachine->setState($this->gumballMachine->getNoQuarterState());
            } else {
                echo "Oops! No gumballs!\n";
                $this->gumballMachine->setState($this->gumballMachine->getSoldOutState());
            }
        }

    }

    public function refill() {}

    public function __toString()
    {
        return "Dispensing two gumballs for your quarter, because you are a WINNER!\n";
    }
}
