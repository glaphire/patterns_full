<?php


namespace App\Classes;


class AlphabeticalOrderIterator implements \Iterator
{
    /**
     * @var WordsCollection
     */
    private $collection;
    /**
     * @var int keeps current iteration position
     */
    private $position = 0;

    /**
     * @var bool keeps iteration order
     */
    private $reverse = false;

    public function __construct($collection, $reverse = false)
    {
        $this->collection = $collection;
        $this->reverse = $reverse;
    }

    public function current()
    {
        return $this->collection->getItems()[$this->position];
    }

    public function next()
    {
        $this->position = $this->position + ($this->reverse ? -1 : 1);
    }

    public function key()
    {
        return $this->position;
    }

    public function valid()
    {
        return isset($this->collection->getItems()[$this->position]);
    }

    /**
     * Returns collection pointer at first element.
     */
    public function rewind()
    {
        $this->position = $this->reverse ? count($this->collection->getItems()) - 1 : 0;
    }
}