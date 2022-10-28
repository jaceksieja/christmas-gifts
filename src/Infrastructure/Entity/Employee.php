<?php

namespace App\Infrastructure\Entity;

class Employee extends \App\Domain\Model\Employee
{
    private ?string $id = null;
    private bool $enabled = true;

    public function getId(): ?string
    {
        return $this->id;
    }

    public function isEnabled(): bool
    {
        return $this->enabled;
    }

    public function setEnabled(bool $enabled): void
    {
        $this->enabled = $enabled;
    }

}
