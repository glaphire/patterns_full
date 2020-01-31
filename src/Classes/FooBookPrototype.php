<?php

namespace App\Classes;

class FooBookPrototype extends BookPrototype
{
    protected string $category = "Foo";

    public function __clone()
    {
    }
}