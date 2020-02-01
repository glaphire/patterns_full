<?php

namespace App\Classes;

use App\Interfaces\Formatter;

abstract class Service
{
    /**
     * @var Formatter
     */
    protected Formatter $implementation;

    public function __construct(Formatter $printer)
    {
        $this->implementation = $printer;
    }

    public function setImplementation(Formatter $printer)
    {
        $this->implementation = $printer;
    }

    abstract public function get(): string;
}
