<?php

namespace Saxulum\Tests\PhpDocGenerator;

use Saxulum\PhpDocGenerator\ParamRow;

class ParamRowTest extends \PHPUnit_Framework_TestCase
{
    public function testWithElementName()
    {
        $paramRow = new ParamRow('string', 'var');

        $this->assertEquals('param', $paramRow->getName());
        $this->assertEquals('@param string $var', (string) $paramRow);
    }

    public function testWithDescription()
    {
        $paramRow = new ParamRow('string', 'var', 'this is a description');

        $this->assertEquals('param', $paramRow->getName());
        $this->assertEquals('@param string $var this is a description', (string) $paramRow);
    }
}
