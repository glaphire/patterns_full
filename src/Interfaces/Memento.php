<?php

namespace App\Interfaces;

interface Memento
{
    public function getName(): string;
    public function getDate(): string;
}