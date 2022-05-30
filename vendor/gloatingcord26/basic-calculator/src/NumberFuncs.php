<?php

namespace BasicCalculator\Main;

class NumberFuncs implements NumberInterface
{
    public function add(int|float $num1, int|float $num2): int|float
    {
        return $num1 + $num2;
    }

    public function sub(int|float $num1, int|float $num2): int|float
    {
        return $num1 - $num2;
    }

    public function mul(int|float $num1, int|float $num2): int|float
    {
        return $num1 * $num2;
    }

    public function dev(int|float $num1, int|float $num2): int|float
    {
        return $num1 / $num2;
    }
}
