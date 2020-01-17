<?php declare(strict_types=1);


namespace App\Classes;


use App\Interfaces\BookInterface;

class PaperBook implements BookInterface
{
    private int $page;

    public function open()
    {
        $this->page = 1;
    }

    public function turnPage()
    {
        $this->page++;
    }

    public function getPage(): int
    {
        return $this->page;
    }
}
