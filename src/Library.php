<?php

namespace Main;

use BasicCalculator\Main\NumberFuncs;
use BasicStringFunctions\Main\StringFuncs;

class Library
{
    
    public function add(float|int $num1, float|int $num2): float|int
    {
        $numberFunctions = new NumberFuncs();

        return $numberFunctions->add($num1, $num2);
    }
    public function sub(float|int $num1, float|int $num2): float|int
    {
        $numberFunctions = new NumberFuncs();

        return $numberFunctions->sub($num1, $num2);
    }
    public function mul(float|int $num1, float|int $num2): float|int
    {
        $numberFunctions = new NumberFuncs();

        return $numberFunctions->mul($num1, $num2);
    }
    public function dev(float|int $num1, float|int $num2): float|int
    {
        $numberFunctions = new NumberFuncs();

        return $numberFunctions->dev($num1, $num2);
    }
    public function reverseString(string $word): string
    {
        $stringFunctions = new StringFuncs();

        return $stringFunctions->mbStrrev($word);
    }
    public function createPassword(string $word): string
    {
        $stringFunctions = new StringFuncs();

        return $stringFunctions->createSecurePassword($word);
    }
}
