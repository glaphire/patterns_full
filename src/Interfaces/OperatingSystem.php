<?php


namespace App\Interfaces;


interface OperatingSystem
{
    public function halt();

    public function getName(): string;
}

