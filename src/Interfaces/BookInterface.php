<?php declare(strict_types=1);


namespace App\Interfaces;


interface BookInterface
{
    public function turnPage();

    public function open();

    public function getPage(): int;
}
