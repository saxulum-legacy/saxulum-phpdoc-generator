<?php

namespace Saxulum\Tests\PhpDocGenerator;

use Saxulum\PhpDocGenerator\TodoRow;

class TodoRowTest extends \PHPUnit_Framework_TestCase
{
    public function testWithDescription()
    {
        $todoRow = new TodoRow('this is a description');

        $this->assertEquals('todo', $todoRow->getName());
        $this->assertEquals('@todo this is a description', (string) $todoRow);
    }
}
