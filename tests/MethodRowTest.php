<?php

namespace Saxulum\Tests\PhpDocGenerator;

use Saxulum\PhpDocGenerator\MethodRow;
use Saxulum\PhpDocGenerator\MethodRowParameter;

class MethodRowTest extends \PHPUnit_Framework_TestCase
{
    public function testWithName()
    {
        $methodRow = new MethodRow('name');

        $this->assertEquals('method', $methodRow->getName());
        $this->assertEquals('@method name()', (string) $methodRow);
    }

    public function testWithType()
    {
        $methodRow = new MethodRow('name', 'string');

        $this->assertEquals('method', $methodRow->getName());
        $this->assertEquals('@method string name()', (string) $methodRow);
    }

    public function testWithParameters()
    {
        $methodRow = new MethodRow('name', 'string', array(
            new MethodRowParameter('name', 'string'),
            new MethodRowParameter('formated'),
        ));

        $this->assertEquals('method', $methodRow->getName());
        $this->assertEquals('@method string name(string $name, $formated)', (string) $methodRow);
    }
}
