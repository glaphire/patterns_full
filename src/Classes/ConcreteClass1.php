<?php


namespace App\Classes;


class ConcreteClass1 extends AbstractClass
{

    protected function requiredOperation1(): void
    {
        echo "ConcreteClass1 says: Implemented Operation1\n";
    }

    protected function requiredOperation2(): void
    {
        echo "ConcreteClass1 says: Implemented Operation2\n";
    }
}
