<?php

namespace Saxulum\Tests\PhpDocGenerator;

use Saxulum\PhpDocGenerator\InternalRow;

class InternalRowTest extends \PHPUnit_Framework_TestCase
{
    public function testWithoutParameter()
    {
        $internalRow = new InternalRow();

        $this->assertEquals('internal', $internalRow->getName());
        $this->assertEquals('@internal', (string) $internalRow);
    }

    public function testWithDescription()
    {
        $internalRow = new InternalRow('this is a description');

        $this->assertEquals('internal', $internalRow->getName());
        $this->assertEquals('@internal this is a description', (string) $internalRow);
    }
}
