<?php

namespace App\Classes;

use Countable;
use App\Interfaces\Text;

class TextFactory implements Countable
{
    /**
     * @var Text[]
     */
    private array $charPool = [];

    public function get(string $name): Text
    {
        if (!isset($this->charPool[$name])) {
            $this->charPool[$name] = $this->create($name);
        }

        return $this->charPool[$name];
    }

    public function create(string $name): Text
    {
        if (strlen($name) == 1) {
            return new Character($name);
        } else {
            return new Word($name);
        }
    }

    public function count(): int
    {
        return count($this->charPool);
    }
}
