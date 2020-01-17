<?php

namespace App;

use App\Classes\Adaptee;
use App\Classes\Adapter;
use App\Classes\Target;

class Application
{
    public function run()
    {
        echo "Client: I can work just fine with the Target objects:\n";
        $target = new Target();
        $this->clientCode($target);
        echo PHP_EOL;

        $adaptee = new Adaptee();
        echo "Client: The Adaptee class has a weird interface."
            . "See, I don't understand it:\n";
        echo "Adaptee: " . $adaptee->specificRequest();
        echo PHP_EOL;

        echo "Client: But I can work with it via the Adapter:\n";
        $adapter = new Adapter($adaptee);
        $this->clientCode($adapter);
    }

    private function clientCode(Target $target)
    {
        echo $target->request();
    }
}
