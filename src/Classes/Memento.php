<?php

namespace App\Classes;

/**
 * Class Memento
 * Role: memento
 * @package App\Classes
 */
class Memento
{
    /**
     * @var State
     */
    private State $state;

    public function __construct(State $stateToSave)
    {
        $this->state = $stateToSave;
    }

    public function getState(): State
    {
        return $this->state;
    }
}