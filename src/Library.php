<?php

namespace Main;

class Library
{
    public function numbers()
    {
        return $this;
    }
    
    public function add($num1, $num2)
    {
        $numberFunctions = new NumberFuncs();

        return $numberFunctions->add($num1, $num2).PHP_EOL;
    }

    public function sub($num1, $num2)
    {
        $numberFunctions = new NumberFuncs();

        return $numberFunctions->sub($num1, $num2).PHP_EOL;
    }

    public function strings()
    {   
        return $this;
    }
    public function reverseString($word)
    {
        $stringFunctions = new StringFuncs();

        return $stringFunctions->mb_strrev($word).PHP_EOL;
    }
    public function createPassword($word)
    {
        $stringFunctions = new StringFuncs();

        return $stringFunctions->create_secure_password($word).PHP_EOL;
    }
}
