<?php

namespace GloatingCord26\BasicLibrary;

use GloatingCord26\BasicCalculator\NumberFuncs;

class NumberLibrary
{
    private NumberFuncs $numberFunctions;

    public function __construct(
        private int $type,
        private int $num1,
        private int $num2,
    ) {
        $this->numberFunctions = new NumberFuncs($this->num1, $this->num2);
    }

    public function numberFuncs(): int
    {
        if (1 === $this->type) {
            return $this->numberFunctions->add();
        }
        if (2 === $this->type) {
            return $this->numberFunctions->sub();
        }
        if (3 === $this->type) {
            return $this->numberFunctions->mul();
        }
        if (4 === $this->type) {
            return $this->numberFunctions->dev();
        }

        return $this->numberFunctions->add();
    }
}
