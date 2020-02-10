<?php

namespace App\Tests;

use App\Classes\State;
use App\Classes\Ticket;
use PHPUnit\Framework\TestCase;

class MementoTest extends TestCase
{
    public function testOpenTicketAssignAndSetBackToOpen()
    {
        $ticket = new Ticket();

        $ticket->open();
        $openedState = $ticket->getState();

        $this->assertSame(State::STATE_OPENED, (string)$ticket->getState());

        $memento = $ticket->saveToMemento();

        $ticket->assign();
        $this->assertSame(State::STATE_ASSIGNED, (string)$ticket->getState());

        // now restore to the opened state, but verify that the state object has been cloned for the memento
        $ticket->restoreFromMemento($memento);
        $this->assertSame(State::STATE_OPENED, (string)$ticket->getState());
        $this->assertNotSame($openedState, $ticket->getState());
    }
}