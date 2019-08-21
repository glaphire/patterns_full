<?php

namespace App\Interfaces;

interface SubjectInterface
{
    public function registerObserver();

    public function removeObserver();

    public function notifyObservers();
}
