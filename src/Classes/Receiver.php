<?php declare(strict_types=1);

namespace App\Classes;

class Receiver
{
    private bool $enableDate = false;

    /**
     * @var string[]
     */
    private array $output = [];

    public function write(string $str)
    {
        if ($this->enableDate) {
            $str .= '[' . date('Y-m-d') . ']';
        }

        $this->output[] = $str;
    }

    public function enableDate()
    {
        $this->enableDate = true;
    }

    public function disableDate()
    {
        $this->enableDate = false;
    }

    public function getOutput()
    {
        return join("\n", $this->output);
    }
}

