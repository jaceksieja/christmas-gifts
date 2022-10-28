<?php

namespace App\Application\Action\Event;

use App\Domain\Action\Event\EventInterface;

class EmployeesCreated implements EventInterface
{
    /**
     * @param iterable<int, EventInterface> $events
     */
    public function __construct(
        private readonly iterable $events
    ) {
    }

    public function getEvents(): iterable
    {
        return $this->events;
    }
}
