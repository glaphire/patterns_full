<?php

namespace App\Classes;

use App\Interfaces\Text;

class Word implements Text
{
    private string $name;

    /**
     * Word constructor.
     * @param $name
     */
    public function __construct($name)
    {
        $this->name = $name;
    }

    public function render(string $font): string
    {
        return sprintf('Word %s with font %s', $this->name, $font);
    }
}