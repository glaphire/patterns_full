<?php

namespace App\Classes;

class ConcreteClass2 extends AbstractClass
{
    protected function requiredOperation1(): void
    {
        echo "ConcreteClass2 says: Implemented Operation1\n";
    }

    protected function requiredOperation2(): void
    {
        echo "ConcreteClass2 says: Implemented Operation2\n";
    }

    protected function hook1(): void
    {
        echo "ConcreteClass2 says: Overriden Hook1\n";
    }
}
