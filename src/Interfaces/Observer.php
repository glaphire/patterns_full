<?php

namespace App\Interfaces;

interface Observer
{
    public function update(string $event, object $emitter, $data = null);
}