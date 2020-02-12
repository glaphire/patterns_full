<?php

namespace App\Interfaces;

interface Entity
{
    public function accept(Visitor $visitor): string;
}