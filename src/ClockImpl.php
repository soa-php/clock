<?php

declare(strict_types=1);

namespace Soa\Clock;

class ClockImpl implements Clock
{
    public function now(): \DateTimeImmutable
    {
        return new \DateTimeImmutable();
    }
}
