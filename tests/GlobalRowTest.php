<?php

namespace Saxulum\Tests\PhpDocGenerator;

use Saxulum\PhpDocGenerator\GlobalRow;

class GlobalRowTest extends \PHPUnit_Framework_TestCase
{
    public function testWithElementName()
    {
        $globalRow = new GlobalRow('string', 'var');

        $this->assertEquals('global', $globalRow->getName());
        $this->assertEquals('@global string $var', (string) $globalRow);
    }

    public function testWithDescription()
    {
        $globalRow = new GlobalRow('string', 'var', 'this is a description');

        $this->assertEquals('global', $globalRow->getName());
        $this->assertEquals('@global string $var this is a description', (string) $globalRow);
    }
}
