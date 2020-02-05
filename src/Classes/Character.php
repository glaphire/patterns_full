<?php

namespace App\Classes;

use App\Interfaces\Text;

class Character implements Text
{
    private string $name;

    /**
     * Character constructor.
     * @param $name
     */
    public function __construct($name)
    {
        $this->name = $name;
    }

    public function render(string $font): string
    {
        return sprintf('Character %s with font %s', $this->name, $font);
    }
}
