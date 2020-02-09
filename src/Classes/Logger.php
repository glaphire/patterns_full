<?php

namespace App\Classes;

use App\Interfaces\Observer;

/**
 * Class Logger
 * A Component that registers all subscribed events
 * @package App\Classes
 */
class Logger implements Observer
{
    private $filename;

    public function __construct($filename)
    {
        $this->filename = $filename;
        if (file_exists($this->filename)) {
            unlink($this->filename);
        }
    }

    public function update(string $event, object $emitter, $data = null)
    {
        $entry = date("Y-m-d H:i:s") . ": '$event' with data " . json_encode($data) . PHP_EOL;
        file_put_contents($this->filename, $entry, FILE_APPEND);

        echo "Logger: I've written '$event' entry to the log.\n";
    }
}