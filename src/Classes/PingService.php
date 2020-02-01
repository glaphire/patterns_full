<?php

namespace App\Classes;

class PingService extends Service
{

    public function get(): string
    {
        return $this->implementation->format('pong');
    }
}