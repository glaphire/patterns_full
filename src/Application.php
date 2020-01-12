<?php

namespace App;

use App\Classes\AddMessageDateCommand;
use App\Classes\HelloCommand;
use App\Classes\Invoker;
use App\Classes\Receiver;

class Application
{
    public function run()
    {
        $invoker = new Invoker();
        $receiver = new Receiver();

        $invoker->setCommand(new HelloCommand($receiver));

        $invoker->run();

        echo "Running simple Receiver:" . PHP_EOL;
        echo $receiver->getOutput() . PHP_EOL;

        /*****************/
        echo "Running simple Receiver with undo command:" . PHP_EOL;
        $messageDateCommand = new AddMessageDateCommand($receiver);
        $messageDateCommand->execute();
        $invoker->run();
        echo $receiver->getOutput() . PHP_EOL;
        $messageDateCommand->undo();
        $invoker->run();
        echo $receiver->getOutput() . PHP_EOL;


    }
}
