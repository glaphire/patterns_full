<?php

namespace App\Classes;

use App\Interfaces\Formatter;

class PlainTextFormatter implements Formatter
{

    public function format(string $text): string
    {
        return $text;
    }
}