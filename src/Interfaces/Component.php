<?php

namespace App\Interfaces;

interface Component
{
    public function accept(Visitor $visitor): void;
}