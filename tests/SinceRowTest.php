<?php

namespace Saxulum\Tests\PhpDocGenerator;

use Saxulum\PhpDocGenerator\SinceRow;

class SinceRowTest extends \PHPUnit_Framework_TestCase
{
    public function testWithVersion()
    {
        $sinceRow = new SinceRow('1.0.0');

        $this->assertEquals('since', $sinceRow->getName());
        $this->assertEquals('@since 1.0.0', (string) $sinceRow);
    }

    public function testWithVersionAndDescription()
    {
        $sinceRow = new SinceRow('1.0.0', 'this is a description');

        $this->assertEquals('since', $sinceRow->getName());
        $this->assertEquals('@since 1.0.0 this is a description', (string) $sinceRow);
    }
}
