<?php declare(strict_types=1);

namespace App\Classes;

use App\Interfaces\CommandInterface;

class HelloCommand implements CommandInterface
{
    private Receiver $output;

    public function __construct(Receiver $console)
    {
        $this->output = $console;
    }

    public function execute()
    {
        $this->output->write("Hello world");
    }
}

