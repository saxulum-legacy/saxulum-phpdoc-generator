<?php

namespace Saxulum\Tests\PhpDocGenerator;

use Saxulum\PhpDocGenerator\PropertyWriteRow;

class PropertyWriteRowTest extends \PHPUnit_Framework_TestCase
{
    public function testWithName()
    {
        $propertyWriteRow = new PropertyWriteRow('string', 'var');

        $this->assertEquals('property-write', $propertyWriteRow->getName());
        $this->assertEquals('@property-write string $var', (string) $propertyWriteRow);
    }

    public function testWithDescription()
    {
        $propertyWriteRow = new PropertyWriteRow('string', 'var', 'this is a description');

        $this->assertEquals('property-write', $propertyWriteRow->getName());
        $this->assertEquals('@property-write string $var this is a description', (string) $propertyWriteRow);
    }
}
