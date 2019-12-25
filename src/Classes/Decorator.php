<?php


namespace App\Classes;

use App\Interfaces\ComponentInterface;

class Decorator implements ComponentInterface
{
    protected $component;

    public function __construct(ComponentInterface $component)
    {
        $this->component = $component;
    }

    public function operation(): string
    {
        return $this->component->operation();
    }
}
