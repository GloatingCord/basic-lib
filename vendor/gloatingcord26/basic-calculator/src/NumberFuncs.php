<?php

namespace GloatingCord26\BasicCalculator;

class NumberFuncs implements NumberInterface
{
    public function __construct(
        private int $num1,
        private int $num2
    ) {
    }

    public function add(): int
    {
        return $this->num1 + $this->num2;
    }

    public function sub(): int
    {
        return $this->num1 - $this->num2;
    }

    public function mul(): int
    {
        return $this->num1 * $this->num2;
    }

    public function dev(): int
    {
        return $this->num1 / $this->num2;
    }
}
