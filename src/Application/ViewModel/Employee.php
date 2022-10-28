<?php

namespace App\Application\ViewModel;

class Employee
{
    public function __construct(
        private ?string $name = null,
        private ?iterable $interests = null,
    ) {
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): void
    {
        $this->name = $name;
    }

    public function getInterests(): ?iterable
    {
        return $this->interests;
    }

    /**
     * @param iterable<int, string> $interests
     */
    public function setInterests(?iterable $interests): void
    {
        $this->interests = $interests;
    }
}
