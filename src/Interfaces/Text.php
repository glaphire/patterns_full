<?php

namespace App\Interfaces;

/**
 * Interface Text
 * For implementing flyweights.
 * @package App\Interfaces
 */
interface Text
{
    public function render(string $extrinsicState): string;
}