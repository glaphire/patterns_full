<?php

namespace App;

use App\Classes\AbstractClass;
use App\Classes\ConcreteClass1;
use App\Classes\ConcreteClass2;

class Application
{
    public function run()
    {
        echo "Same client code can work with different subclasses:\n";
        $this->clientCode(new ConcreteClass1());
        echo PHP_EOL;

        echo "Same client code can work with different subclasses:\n";
        $this->clientCode(new ConcreteClass2());
        echo PHP_EOL;
    }

    private function clientCode(AbstractClass $class)
    {
        $class->templateMethod();
    }
}
