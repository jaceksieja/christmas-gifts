<?php

namespace App\Application\Logger;

use App\Domain\Action\Event\EventInterface;

interface LoggerInterface
{
    public function event(EventInterface $event): void;
}
