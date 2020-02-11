<?php

namespace App;

use App\Classes\ConcreteComponentA;
use App\Classes\ConcreteComponentB;
use App\Classes\ConcreteVisitor1;
use App\Classes\ConcreteVisitor2;
use App\Interfaces\Component;
use App\Interfaces\Visitor;

class Application
{
    public function run()
    {
        $components = [
            new ConcreteComponentA(),
            new ConcreteComponentB(),
        ];

        echo "Client code works with all visitors via the base Visitor interface:\n";
        $visitor1 = new ConcreteVisitor1();
        $this->clientCode($components, $visitor1);
        echo PHP_EOL;

        echo "It allows the same client code to work with different types of visitors:\n";
        $visitor2 = new ConcreteVisitor2();
        $this->clientCode($components, $visitor2);
    }

    private function clientCode(array $components, Visitor $visitor)
    {
        foreach ($components as $component) {
            /**
             * @var Component $component
             */
            $component->accept($visitor);
        }
    }
}
