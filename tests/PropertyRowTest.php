<?php

namespace Saxulum\Tests\PhpDocGenerator;

use Saxulum\PhpDocGenerator\PropertyRow;

class PropertyRowTest extends \PHPUnit_Framework_TestCase
{
    public function testWithName()
    {
        $propertyRow = new PropertyRow('string', 'var');

        $this->assertEquals('property', $propertyRow->getName());
        $this->assertEquals('@property string $var', (string) $propertyRow);
    }

    public function testWithDescription()
    {
        $propertyRow = new PropertyRow('string', 'var', 'this is a description');

        $this->assertEquals('property', $propertyRow->getName());
        $this->assertEquals('@property string $var this is a description', (string) $propertyRow);
    }
}
