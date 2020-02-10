<?php

namespace App\Classes;

use App\Interfaces\Logger;

class NullLogger implements Logger
{

    public function log(string $str)
    {
        //do nothing
    }
}