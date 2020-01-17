<?php declare(strict_types=1);


namespace App\Classes;


use App\Interfaces\BookInterface;

class EBookAdapter implements BookInterface
{
    private EBookInterface $ebook;

    public function __construct(EBookInterface $ebook)
    {
        $this->ebook = $ebook;
    }

    public function turnPage()
    {
        $this->ebook->pressNext();
    }

    public function open()
    {
        $this->ebook->unlock();
    }

    public function getPage(): int
    {
        return $this->ebook->getPage()[0];
    }
}
