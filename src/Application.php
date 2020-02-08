<?php

namespace App;

use App\Classes\DogHandler;
use App\Classes\MonkeyHandler;
use App\Classes\SquirrelHandler;
use App\Interfaces\Handler;

class Application
{
    public function run()
    {
        $monkey = new MonkeyHandler();
        $squirrel = new SquirrelHandler();
        $dog = new DogHandler();

        $monkey->setNext($squirrel)->setNext($dog);

        echo "Chain: Monkey > Squirrel > Dog\n\n";
        $this->clientCode($monkey);
        echo PHP_EOL;

        echo "Subchain: Squirrel > Dog\n\n";
        $this->clientCode($squirrel);
    }

    private function clientCode(Handler $handler) {
        $foods = ["Nut", "Banana", "Cup of coffee"];

        foreach ($foods as $food) {
            echo "Client: who wants a $food?\n";
            $result = $handler->handle($food);

            if ($result) {
                echo " $result";
            } else {
                echo " $food was left untouched.\n";
            }
        }
    }
}
