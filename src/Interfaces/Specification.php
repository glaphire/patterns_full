<?php

namespace App\Interfaces;

use App\Classes\Item;

interface Specification
{
    public function isSatisfiedBy(Item $item): bool;
}