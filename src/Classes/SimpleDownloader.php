<?php


namespace App\Classes;


use App\Interfaces\Downloader;

class SimpleDownloader implements Downloader
{

    public function download(string $url): string
    {
        echo "Downloading a file from the internet.\n";
        $result = file_get_contents($url);
        echo "Downloaded bytes: " . strlen($result) . PHP_EOL;

        return $result;
    }
}