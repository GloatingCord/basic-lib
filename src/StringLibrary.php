<?php

namespace GloatingCord26\BasicLibrary;

use GloatingCord26\BasicStringFunctions\StringFuncs;

class StringLibrary
{
    public function __construct(
        private string $word,
    ) {
    }

    public function reverseString(): string
    {
        $stringFunctions = new StringFuncs($this->word);

        return $stringFunctions->mbStrrev();
    }

    public function createPassword(): string
    {
        $stringFunctions = new StringFuncs($this->word);

        return $stringFunctions->createSecurePassword();
    }
}
