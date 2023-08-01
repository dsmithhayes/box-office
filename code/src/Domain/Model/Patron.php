<?php

namespace BoxOffice\Domain\Model;

class Patron
{
    public function __construct(
        public readonly string $name,
        public readonly string $email
    ) {}
}
