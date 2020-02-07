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
        if (!$this->next) {
            return true;
        }

        return $this->next->check($email, $password);
    }
}
