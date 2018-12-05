<?php

declare(strict_types=1);

namespace Soa\Clock;

class ClockFake implements Clock
{
    /**
     * @var string
     */
    private $now;

    public function __construct(string $now)
    {
        $this->now = $now;
    }

    public function now(): \DateTimeImmutable
    {
        return new \DateTimeImmutable($this->now);
    }
}
