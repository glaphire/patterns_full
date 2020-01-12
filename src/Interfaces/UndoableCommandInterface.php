<?php


namespace App\Interfaces;


interface UndoableCommandInterface extends CommandInterface
{
    public function undo();
}
