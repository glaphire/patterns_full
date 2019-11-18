<?php

namespace App\Classes;

use SplObserver;

class UserRepository implements \SplSubject
{
    private $users = [];

    private $observers = [];

    public function __construct()
    {
        $this->observers['*'] = [];
    }

    private function initEventGroup(string $event = '*'): void
    {
        if (!isset($this->observers[$event])) {
            $this->observers[$event] = [];
        }
    }

    private function getEventObservers(string $event = '*'): array
    {
        $this->initEventGroup($event);
        $group = $this->observers[$event];
        $all = $this->observers['*'];

        return array_merge($group, $all);
    }

    public function attach(SplObserver $observer, string $event = '*'): void
    {
        $this->initEventGroup($event);

        $this->observers[$event][] = $observer;
    }

    public function detach(SplObserver $observer, string $event = '*': void
    {
        foreach(($this->getEventObservers($event)) as $key => $s) {
            if ($s === $observer) {
                unset($this->observers[$event][$key]);
            }
        }
    }

    public function notify(string $event = '*', $data = null): void
    {
        echo self::class . ": broadcasting the $event event\n";
        foreach ($this->getEventObservers($event) as $eventObserver) {
            $eventObserver->update($this, $event, $data);
        }
    }
}

