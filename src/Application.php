<?php

namespace App;

use App\Classes\EBookAdapter;
use App\Classes\PaperBook;
use App\Classes\Kindle;

class Application
{
    public function run()
    {
        $book = new PaperBook();
        $book->open();
        $book->turnPage();

        $kindle = new Kindle();
        $adaptedBook = new EBookAdapter($kindle);

        $adaptedBook->open();
        $adaptedBook->turnPage();
    }
}
