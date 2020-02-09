<?php

namespace App;

use App\Classes\Component1;
use App\Classes\Component2;
use App\Classes\ConcreteMediator;

class Application
{
    public function run()
    {
        $c1 = new Component1();
        $c2 = new Component2();

        $mediator = new ConcreteMediator($c1, $c2);

        echo "Client triggers operation A.\n";
        $c1->doA();

        echo "Client triggers operation D.\n";
        $c2->doD();
    }
}
