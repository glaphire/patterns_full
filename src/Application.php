<?php

namespace App;

use App\Classes\GumballMachine;

class Application
{
    public function run()
    {
        $gumballMachine = new GumballMachine(10);

        for ($i = 0; $i < 10; $i++) {
            echo $gumballMachine;

            $gumballMachine->insertQuarter();
            $gumballMachine->turnCrank();
        }
    }
}
