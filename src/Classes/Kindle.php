<?php declare(strict_types=1);


namespace App\Classes;


class Kindle implements EBookInterface
{
    private int $page = 1;
    private int $totalPages = 100;

    public function unlock()
    {
        echo "unlock\n";
    }

    public function pressNext()
    {
        $this->page++;
    }

    /**
     * @return int[]
     */
    public function getPage(): array
    {
        return [$this->page, $this->totalPages];
    }
}
