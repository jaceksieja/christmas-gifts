<?php

namespace App\Infrastructure\Storage;

interface StorageTransactionInterface
{
    public function start(): void;
    public function end(): void;
}
