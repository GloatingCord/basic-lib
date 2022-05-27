<?php

namespace Main;

class Library
{
    public function numbers(): object
    {
        return $this;
    }
    
    public function add(float|int $num1, float|int $num2): string
    {
        $numberFunctions = new NumberFuncs();

        return $numberFunctions->add($num1, $num2).PHP_EOL;
    }

    public function sub(float|int $num1, float|int $num2): string
    {
        $numberFunctions = new NumberFuncs();

        return $numberFunctions->sub($num1, $num2).PHP_EOL;
    }

    public function strings(): object
    {   
        return $this;
    }
    public function reverseString(string $word): string
    {
        $stringFunctions = new StringFuncs();

        return $stringFunctions->mbStrrev($word).PHP_EOL;
    }
    public function createPassword(string $word): string
    {
        $stringFunctions = new StringFuncs();

        return $stringFunctions->createSecurePassword($word).PHP_EOL;
    }
}
