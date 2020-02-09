<?php

namespace App\Classes;

use App\Interfaces\Observer;

/**
 * Event Dispatcher acts as Mediator and contains
 * subscribing and event logic. While classic
 * Mediator depends on concrete components, this one
 * is only tied to their abstract interfaces.
 *
 * The components themselves may subscribe to specific
 * events that they are interested in via the Mediator's
 * subscription interface.
 *
 * Class EventDispatcher
 * @package App\Classes
 */
class EventDispatcher
{
    /**
     * @var Observer[]
     */
    private $observers = [];

    public function __construct()
    {
        /**
         * special observers group that listens all events
         */
        $this->observers["*"] = [];
    }

    private function initEventGroup(string &$event = "*"): void
    {
        if (!isset($this->observers[$event])) {
            $this->observers[$event] = [];
        }
    }

    private function getEventObservers(string $event = "*"): array
    {
        $this->initEventGroup($event);
        $group = $this->observers[$event];
        $all = $this->observers["*"];

        return array_merge($group, $all);
    }

    public function attach(Observer $observer, string $event = "*"): void
    {
        $this->initEventGroup($event);
        $this->observers[$event][] = $observer;
    }

    public function detach(Observer $observer, string $event = "*"): void
    {
        foreach ($this->getEventObservers($event) as $key => $s) {
            if ($s === $observer) {
                unset($this->observers[$event][$key]);
            }
        }
    }

    public function trigger(string $event, object $emitter, $data = null): void
    {
        echo "EventDispatcher: Broadcasting the '$event' event.\n";
        foreach ($this->getEventObservers($event) as $observer) {
            $observer->update($event, $emitter, $data);
        }
    }
}