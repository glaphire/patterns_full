<?php

namespace App;

use App\Classes\WordsCollection;

class Application
{
    public function run()
    {
        $collection = new WordsCollection();
        $collection->addItem("First");
        $collection->addItem("Second");
        $collection->addItem("Third");
        $collection->addItem("Fourth");
        
        echo "Straight traversal:\n";

        foreach ($collection->getIterator() as $item) {
            echo $item . PHP_EOL;
        }
        
        echo PHP_EOL;
        
        echo "Reverse traversal:\n";

        foreach ($collection->getReverseIterator() as $item) {
            echo $item . PHP_EOL;
        }
    }
}
