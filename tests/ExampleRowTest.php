<?php

namespace Saxulum\Tests\PhpDocGenerator;

use Saxulum\PhpDocGenerator\ExampleRow;

class ExampleRowTest extends \PHPUnit_Framework_TestCase
{
    public function testWithLocation()
    {
        $exampleRow = new ExampleRow('example.php');

        $this->assertEquals('example', $exampleRow->getName());
        $this->assertEquals('@example example.php', (string) $exampleRow);
    }

    public function testWithStartLine()
    {
        $exampleRow = new ExampleRow('example.php', 1);

        $this->assertEquals('example', $exampleRow->getName());
        $this->assertEquals('@example example.php 1', (string) $exampleRow);
    }

    public function testWithNumberOfLines()
    {
        $exampleRow = new ExampleRow('example.php', 1, 1);

        $this->assertEquals('example', $exampleRow->getName());
        $this->assertEquals('@example example.php 1 1', (string) $exampleRow);
    }

    public function testWithDescription()
    {
        $exampleRow = new ExampleRow('example.php', null, null, 'this is a description');

        $this->assertEquals('example', $exampleRow->getName());
        $this->assertEquals('@example example.php this is a description', (string) $exampleRow);
    }
}
