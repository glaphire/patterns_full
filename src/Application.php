<?php

namespace App;

use App\Classes\MallardDuck;
use App\Classes\TurkeyAdapter;
use App\Classes\WildTurkey;
use App\Interfaces\DuckInterface;

class Application
{
    public function run()
    {
        $duck = new MallardDuck();
        $turkey = new WildTurkey();

        $turkeyAdapter = new TurkeyAdapter($turkey);

        echo "The Turkey says:\n";
        $turkey->gobble();
        $turkey->fly();

        echo "\nThe Duck says:\n";
        $this->testDuck($duck);

        echo "\nThe Turkey Adapter says:";
        $this->testDuck($turkeyAdapter);

    }

    private function testDuck(DuckInterface $duck)
    {
        $duck->quack();
        $duck->fly();
    }
}
