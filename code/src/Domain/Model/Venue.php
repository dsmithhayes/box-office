<?php

namespace BoxOffice\Domain\Model;

class Venue
{
    public function __construct(public readonly string $name)
    {
    }
}
