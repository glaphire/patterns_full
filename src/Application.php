<?php

namespace App;

use App\Classes\Component;
use App\Classes\Visitor;

class Application
{
    public function run()
    {
        $component = new Component();
        $visitor = new Visitor();
        $component->accept($visitor);
    }
}
