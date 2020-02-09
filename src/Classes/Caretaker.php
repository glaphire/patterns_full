<?php

namespace App\Classes;

use App\Interfaces\Memento;

class Caretaker
{
    /**
     * @var Memento[]
     */
    private $mementos = [];

    /**
     * @var Originator
     */
    private $originator;

    public function __construct(Originator $originator)
    {
        $this->originator = $originator;
    }

    public function backup(): void
    {
        echo "\nCaretaker: Saving Originator's state...\n";
        $this->mementos[] = $this->originator->save();
    }

    public function undo(): void
    {
        if (!count($this->mementos)) {
            return;
        }

        /**
         * @var Memento
         */
        $memento = array_pop($this->mementos);

        echo "Caretaker: Restoring state to " . $memento->getName() . PHP_EOL;
        try {
            $this->originator->restore($memento);
        } catch (\Exception $e) {
            $this->undo();
        }
    }

    public function showHistory(): void
    {
        echo "Caretaker: here's the list of mementos:\n";
        foreach ($this->mementos as $memento) {
            echo $memento->getName() . PHP_EOL;
        }
    }
}