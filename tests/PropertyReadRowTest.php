<?php

namespace Saxulum\Tests\PhpDocGenerator;

use Saxulum\PhpDocGenerator\PropertyReadRow;

class PropertyReadRowTest extends \PHPUnit_Framework_TestCase
{
    public function testWithName()
    {
        $propertyReadRow = new PropertyReadRow('string', 'var');

        $this->assertEquals('property-read', $propertyReadRow->getName());
        $this->assertEquals('@property-read string $var', (string) $propertyReadRow);
    }

    public function testWithDescription()
    {
        $propertyReadRow = new PropertyReadRow('string', 'var', 'this is a description');

        $this->assertEquals('property-read', $propertyReadRow->getName());
        $this->assertEquals('@property-read string $var this is a description', (string) $propertyReadRow);
    }
}
