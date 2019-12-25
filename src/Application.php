<?php

namespace App;

use App\Classes\ConcreteComponent;
use App\Classes\ConcreteDecoratorA;
use App\Classes\ConcreteDecoratorB;
use App\Interfaces\ComponentInterface;

class Application
{
    public function clientCode(ComponentInterface $component)
    {
        echo "Result: " . $component->operation();
    }

    public function run()
    {
        $simple = new ConcreteComponent();
        echo "Client: I've got a simple component:\n";
        $this->clientCode($simple);
        echo PHP_EOL;

        $decorator1 = new ConcreteDecoratorA($simple);
        $decorator2 = new ConcreteDecoratorB($decorator1);

        echo "Client: now I've got a decorated component:\n";
        $this->clientCode($decorator2);
    }
}
