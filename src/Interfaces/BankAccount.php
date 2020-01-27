<?php

namespace App\Interfaces;

interface BankAccount
{
    public function deposit(int $amount): void;

    public function getBalance(): int;
}
