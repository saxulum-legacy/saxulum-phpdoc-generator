<?php

namespace Saxulum\Tests\PhpDocGenerator;

use Saxulum\PhpDocGenerator\UsesRow;

class UsesRowTest extends \PHPUnit_Framework_TestCase
{
    public function testWithName()
    {
        $usesRow = new UsesRow('MyClass::$items');

        $this->assertEquals('uses', $usesRow->getName());
        $this->assertEquals('@uses MyClass::$items', (string) $usesRow);
    }

    public function testWithDescription()
    {
        $usesRow = new UsesRow('MyClass::$items', 'this is a description');

        $this->assertEquals('uses', $usesRow->getName());
        $this->assertEquals('@uses MyClass::$items this is a description', (string) $usesRow);
    }
}
