<?php

namespace App\Classes;

use App\Interfaces\Formatter;

class HtmlFormatter implements Formatter
{

    public function format(string $text): string
    {
        return sprintf('<p>%s</p>', $text);
    }
}