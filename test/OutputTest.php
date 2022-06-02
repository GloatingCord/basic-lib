<?php

namespace GloatingCord26\Testing;

use GloatingCord26\BasicLibrary\NumberLibrary;
use GloatingCord26\BasicLibrary\StringLibrary;
use PHPUnit\Framework\TestCase;

/**
 * @internal
 * @coversNothing
 */
final class OutputTest extends TestCase
{
    public function testExpectWordActualReverseWord(): void
    {
        $library = new StringLibrary('alukard');
        $this->expectOutputString($library->reverseString());

        echo $library->reverseString();
    }

    public function testExpectNumberActualNumber(): void
    {
        $library = new NumberLibrary(1, 17, 13);

        $this->assertSame(30, $library->numberFuncs());
    }
}
