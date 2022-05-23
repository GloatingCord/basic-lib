<?php

namespace Main;

class Reverse
{
    public function __construct(public string $word)
    {
        $this->word = $word;
    }

    public function mb_strrev($word, $encoding = null)
    {
        if (null === $encoding) {
            $encoding = mb_detect_encoding($word);
        }

        $length = mb_strlen($word, $encoding);
        $reversed = '';
        while ($length-- > 0) {
            $reversed .= mb_substr($word, $length, 1, $encoding);
        }

        return $reversed;
    }
}
