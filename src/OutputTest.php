<?php

namespace Main;

require_once __DIR__.'/../vendor/autoload.php';

use PHPUnit\Framework\TestCase;
use Main\Library;

final class OutputTest extends TestCase
{
    public function testExpectWordActualReverseWord(): void
    {
        $library = new Library();
        $this->expectOutputString('alukard');

        print $library->reverseString("drakula");
    }

    public function testExpectNumberActualNumber(): void
    {
        $library = new Library();

        $this->assertSame(30.0, $library->add(17.5, 12.5));
    }
}