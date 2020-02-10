<?php

namespace App\Classes;

use App\Interfaces\Logger;

class PrintLogger implements Logger
{
    public function log(string $str)
    {
        echo $str;
    }
}