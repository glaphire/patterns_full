<?php

namespace App;

use App\Classes\Caretaker;
use App\Classes\Originator;

class Application
{
    public function run()
    {
        $originator = new Originator("Super-duper-super-puper-super.");
        $caretaker = new Caretaker($originator);

        $caretaker->backup();
        $originator->doSomething();

        $caretaker->backup();
        $originator->doSomething();

        $caretaker->backup();
        $originator->doSomething();

        echo PHP_EOL;
        $caretaker->showHistory();
        echo "\nClient: Now, let's rollback!\n\n";
        $caretaker->undo();
        echo "\nClient: Once more!\n\n";
        $caretaker->undo();
    }
}
