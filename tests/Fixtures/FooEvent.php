<?php

declare(strict_types=1);

namespace TBoileau\Observer\Tests\Fixtures;

class FooEvent
{
    private string $test;

    public function __construct(string $test)
    {
        $this->test = $test;
    }

    public function getTest(): string
    {
        return $this->test;
    }

    public function setTest(string $test): void
    {
        $this->test = $test;
    }
}
