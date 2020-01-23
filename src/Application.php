<?php

namespace App;

use App\Classes\Elevator;
use App\Exceptions\IllegalStateTransitionException;

class Application
{
    public function run()
    {
        $elevator = new Elevator();
        $elevator->close();
        $elevator->open();

        echo "Is elevator open? " . ($elevator->isOpen() ? "Yes" : "No") . PHP_EOL;

        $elevator->close();

        echo "Is elevator open? " . ($elevator->isOpen() ? "Yes" : "No") . PHP_EOL;

        $elevator->move();
        $elevator->stop();
        $elevator->open();

        try {
            $elevator->move();
        } catch (IllegalStateTransitionException $e) {
            echo "Moving is not allowed in open state\n";
        }
    }
}

