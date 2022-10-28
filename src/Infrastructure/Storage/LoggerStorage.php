<?php

namespace App\Infrastructure\Storage;

use App\Application\Logger\LoggerInterface;
use App\Domain\Action\Event\EventInterface;

class LoggerStorage implements LoggerInterface
{
    public function event(EventInterface $event): void
    {
        // TODO: Implement event() method.
    }
}
