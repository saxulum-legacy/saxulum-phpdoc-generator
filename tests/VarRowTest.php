<?php

namespace Saxulum\Tests\PhpDocGenerator;

use Saxulum\PhpDocGenerator\VarRow;

class VarRowTest extends \PHPUnit_Framework_TestCase
{
    public function testWithType()
    {
        $varRow = new VarRow('string');

        $this->assertEquals('var', $varRow->getName());
        $this->assertEquals('@var string', (string) $varRow);
    }

    public function testWithName()
    {
        $varRow = new VarRow('string', 'var');

        $this->assertEquals('var', $varRow->getName());
        $this->assertEquals('@var string $var', (string) $varRow);
    }

    public function testWithDescription()
    {
        $varRow = new VarRow('string', 'var', 'this is a description');

        $this->assertEquals('var', $varRow->getName());
        $this->assertEquals('@var string $var this is a description', (string) $varRow);
    }
}
