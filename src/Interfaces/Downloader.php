<?php


namespace App\Interfaces;


interface Downloader
{
    public function download(string $url): string;
}
