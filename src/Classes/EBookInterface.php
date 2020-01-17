<?php declare(strict_types=1);


namespace App\Classes;


interface EBookInterface
{
    public function unlock();

    public function pressNext();

    /**
     * Returns array of current page and total pages, e.g. [10,100]
     * @return array
     */
    public function getPage(): array;
}

