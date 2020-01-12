<?php declare(strict_types=1);

namespace App\Interfaces;

interface UndoableCommandInterface extends CommandInterface
{
    public function undo();
}

