<?php

namespace App\Classes;

class DogHandler extends AbstractHandler
{
    public function handle(string $request): ?string
    {
        if ($request === 'Meatball') {
            return "Dog: I'll eat the $request\n";
        } else {
            return parent::handle($request);
        }
    }
}