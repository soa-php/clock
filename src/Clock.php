<?php

declare(strict_types=1);

namespace Soa\Clock;

interface Clock
{
    const MICROSECONDS_FORMAT = 'Y-m-d H:i:s.u';

    public function now(): \DateTimeImmutable;
}
