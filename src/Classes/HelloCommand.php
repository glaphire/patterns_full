<?php

namespace App\Classes;

use App\Interfaces\CommandInterface;

class HelloCommand implements CommandInterface
{
    private $output;

    public function __construct($console)
    {
    }

    public function execute()
    {
        // TODO: Implement execute() method.
    }
}
