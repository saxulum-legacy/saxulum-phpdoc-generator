<?php

namespace Saxulum\Tests\PhpDocGenerator;

use Saxulum\PhpDocGenerator\IgnoreRow;

class IgnoreRowTest extends \PHPUnit_Framework_TestCase
{
    public function testWithDescription()
    {
        $ignoreRow = new IgnoreRow('this is a description');

        $this->assertEquals('ignore', $ignoreRow->getName());
        $this->assertEquals('@ignore this is a description', (string) $ignoreRow);
    }
}
