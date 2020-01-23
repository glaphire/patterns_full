<?php

namespace App;

use App\Classes\GumballMachine;

class Application
{
    public function run()
    {
        $gumballMachine = new GumballMachine(2);

        echo $gumballMachine;

        $gumballMachine->insertQuarter();
        $gumballMachine->turnCrank();

        echo $gumballMachine;

        $gumballMachine->insertQuarter();
        $gumballMachine->turnCrank();
        $gumballMachine->insertQuarter();
        $gumballMachine->turnCrank();

        $gumballMachine->refill(5);
        $gumballMachine->insertQuarter();
        $gumballMachine->turnCrank();

        echo $gumballMachine;
    }
}
