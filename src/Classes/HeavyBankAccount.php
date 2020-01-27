<?php

namespace App\Classes;

use App\Interfaces\BankAccount;

class HeavyBankAccount implements BankAccount
{
    /**
     * @var int[]
     */
    private array $transactions = [];

    public function deposit(int $amount): void
    {
        $this->transactions[] = $amount;
    }

    public function getBalance(): int
    {
        /*
         * heavy calculation you want to avoid if unnecessary
         */
        return (int) array_sum($this->transactions);
    }
}
