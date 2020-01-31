<?php

namespace App;

use App\Classes\Abstraction;
use App\Classes\ConcreteImplementationA;
use App\Classes\ConcreteImplementationB;
use App\Classes\ExtendedAbstraction;

class Application
{
    public function run()
    {
        $implementation = new ConcreteImplementationA();
        $abstraction = new Abstraction($implementation);
        $this->clientCode($abstraction);

        echo PHP_EOL;

        $implementation = new ConcreteImplementationB();
        $abstraction = new ExtendedAbstraction($implementation);
        $this->clientCode($abstraction);
    }

    private function clientCode(Abstraction $abstraction)
    {
        echo $abstraction->operation();
    }
}
