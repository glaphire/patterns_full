<?php

namespace App\Interfaces;

interface Formatter
{
    public function format(string $text): string;
}
