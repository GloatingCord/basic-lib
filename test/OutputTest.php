<?php

namespace Test;

require_once __DIR__.'/../vendor/autoload.php';

use BasicLibrary\Main\Library;
use PHPUnit\Framework\TestCase;

/**
 * @internal
 * @coversNothing
 */
final class OutputTest extends TestCase
{
    public function testExpectWordActualReverseWord(): void
    {
        $library = new Library();
        $this->expectOutputString('alukard');

        echo $library->reverseString('drakula');
    }

    public function testExpectNumberActualNumber(): void
    {
        $library = new Library();

        $this->assertSame(30.0, $library->add(17.5, 12.5));
    }
}
