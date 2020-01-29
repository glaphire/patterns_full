<?php

namespace App;

use App\Classes\ConcreteBuilder1;
use App\Classes\Director;

class Application
{
    public function run()
    {
        $director = new Director();
        $this->clientCode($director);
    }

    private function clientCode(Director $director)
    {
        $builder = new ConcreteBuilder1();
        $director->setBuilder($builder);

        echo "Standard basic product:\n";
        $director->buildMinimalViableProduct();
        $builder->getProduct()->listParts();

        echo "Standard full featured product:\n";
        $director->buildFullFeaturedProduct();
        $builder->getProduct()->listParts();

        //Builder pattern can be implemented without Director
        echo "Custom product:\n";
        $builder->producePartA();
        $builder->producePartC();
        $builder->getProduct()->listParts();
    }
}
