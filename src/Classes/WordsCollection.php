<?php

namespace App\Classes;

class WordsCollection implements \IteratorAggregate
{
    private $items = [];

    public function getItems()
    {
        return $this->items;
    }

    public function addItem($item)
    {
        $this->items[] = $item;
    }

    public function getIterator(): \Iterator
    {
        return new AlphabeticalOrderIterator($this);
    }

    public function getReverseIterator(): \Iterator
    {
        return new AlphabeticalOrderIterator($this, true);
    }
}