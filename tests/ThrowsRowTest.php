<?php

namespace Saxulum\Tests\PhpDocGenerator;

use Saxulum\PhpDocGenerator\ThrowsRow;

class ThrowsRowTest extends \PHPUnit_Framework_TestCase
{
    public function testWithType()
    {
        $throwsRow = new ThrowsRow('string');

        $this->assertEquals('throws', $throwsRow->getName());
        $this->assertEquals('@throws string', (string) $throwsRow);
    }

    public function testWithDescription()
    {
        $throwsRow = new ThrowsRow('string', 'this is a description');

        $this->assertEquals('throws', $throwsRow->getName());
        $this->assertEquals('@throws string this is a description', (string) $throwsRow);
    }
}
