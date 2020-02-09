<?php

namespace App\Interfaces;

interface Mediator
{
    public function notify(object $sender, string $event): void;
}