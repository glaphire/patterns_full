<?php

namespace App\Classes;

use App\Interfaces\CommandInterface;

class Invoker
{
    /**
     * @var CommandInterface
     */
    private CommandInterface $command;

    public function setCommand(CommandInterface $command)
    {
        $this->command = $command;
    }

    public function run()
    {
        $this->command->execute();
    }
}
