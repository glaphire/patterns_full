<?php

namespace App\Classes;

abstract class BookPrototype
{
    protected string $title;
    protected string $category;

    abstract public function __clone();

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setTitle(string $title): void
    {
        $this->title = $title;
    }
}
