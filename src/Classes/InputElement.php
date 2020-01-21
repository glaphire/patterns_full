<?php

namespace App\Classes;

use App\Interfaces\Renderable;

class InputElement implements Renderable
{
    public function render(): string
    {
        return '<input type="text">';
    }
}
