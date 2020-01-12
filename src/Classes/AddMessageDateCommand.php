<?php declare(strict_types=1);

namespace App\Classes;

use App\Interfaces\UndoableCommandInterface;

class AddMessageDateCommand implements UndoableCommandInterface
{
    private Receiver $output;

    public function __construct(Receiver $console)
    {
        $this->output = $console;
    }

    public function undo() {
        $this->output->disableDate();
    }

    public function execute()
    {
       $this->output->enableDate();
    }
}
