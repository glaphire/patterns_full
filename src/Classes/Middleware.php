<?php

namespace App\Classes;

abstract class Middleware
{
    /**
     * @var Middleware
     */
    private ?Middleware $next = null;

    public function linkWith(Middleware $next = null): Middleware
    {
        $this->next = $next;

        return $next;
    }

    /**
     * Subclasses should override this method to provide own process.
     * Subclass can call parent method if it cannot process request.
     * @param string $email
     * @param string $password
     * @return bool
     */
    public function check(string $email, string $password): bool
    {
        echo "This is " . static::class . PHP_EOL;

        if (!$this->next) {
            echo "There is not next middleware in chain.\n";
            return true;
        }

        echo "Going to next middleware.\n";

        return $this->next->check($email, $password);
    }
}
