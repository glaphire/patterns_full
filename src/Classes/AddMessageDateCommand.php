<?php


namespace App\Classes;


use App\Interfaces\UndoableCommandInterface;

class AddMessageDateCommand implements UndoableCommandInterface
{
    private $output;

    public function __construct($console)
    {

    }

    public function undo() {

    }

    public function execute()
    {
        // TODO: Implement execute() method.
    }
}
