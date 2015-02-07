<?php

namespace Saxulum\Tests\PhpDocGenerator;

use Saxulum\PhpDocGenerator\DeprecatedRow;

class DeprecatedRowTest extends \PHPUnit_Framework_TestCase
{
    public function testPlain()
    {
        $deprecatedRow = new DeprecatedRow();

        $this->assertEquals('deprecated', $deprecatedRow->getName());
        $this->assertEquals('@deprecated', (string) $deprecatedRow);
    }

    public function testWithVersion()
    {
        $deprecatedRow = new DeprecatedRow('1.0.0');

        $this->assertEquals('deprecated', $deprecatedRow->getName());
        $this->assertEquals('@deprecated 1.0.0', (string) $deprecatedRow);
    }

    public function testWithDescription()
    {
        $deprecatedRow = new DeprecatedRow(null, 'this is a description');

        $this->assertEquals('deprecated', $deprecatedRow->getName());
        $this->assertEquals('@deprecated this is a description', (string) $deprecatedRow);
    }

    public function testWithVersionAndDescription()
    {
        $deprecatedRow = new DeprecatedRow('1.0.0', 'this is a description');

        $this->assertEquals('deprecated', $deprecatedRow->getName());
        $this->assertEquals('@deprecated 1.0.0 this is a description', (string) $deprecatedRow);
    }
}
