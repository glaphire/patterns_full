<?php

namespace App\Classes;

class MonkeyHandler extends AbstractHandler
{
    public function handle(string $request): ?string
    {
        if ($request == "Banana") {
            return "Monkey: I'll eat the $request\n";
        } else {
            return parent::handle($request);
        }
    }
}