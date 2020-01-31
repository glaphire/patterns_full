<?php

namespace App\Classes;

class Author
{
    private $name;

    private $pages = [];

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function addToPage(Page $page)
    {
        $this->pages = $page;
    }
}