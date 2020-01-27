<?php

namespace App;

use App\Classes\BankAccountProxy;

class Application
{
    public function run()
    {
        $bankAccount = new BankAccountProxy();
        $bankAccount->deposit(30);

        echo "This time balance is being calculated: " . $bankAccount->getBalance() . PHP_EOL;

        $bankAccount->deposit(50);

        echo "This time the previously calculated balance is returning again without recalculating it: ";

        echo $bankAccount->getBalance() . PHP_EOL;
    }
}
