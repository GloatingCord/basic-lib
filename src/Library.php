<?php

namespace Main;

class Library
{
    public function nummbers($num1, $num2)
    {
        $number_functions = new NumberFuncs();

        return $number_functions->add($num1, $num2).PHP_EOL;
    }

    public function strings()
    {
        $string_functions = new StringFuncs();
    }
}
