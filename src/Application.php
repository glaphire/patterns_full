<?php

namespace App;

use App\Classes\Page;
use App\Classes\Author;

class Application
{
    public function run()
    {
        $this->clientCode();
    }

    private function clientCode()
    {
        $author = new Author("John Smith");
        $page = new Page("Tip of the day", "Keep calm and carry on.", $author);

        $page->addComment("Nice tip, thanks!");

        $draft = clone $page;
        echo "Dump of the clone. Note that the author is now referencing two objects.\n";

        print_r($draft);
    }
}
