<?php

namespace Saxulum\Tests\PhpDocGenerator;

use Saxulum\PhpDocGenerator\FilesourceRow;

class FilesourceRowTest extends \PHPUnit_Framework_TestCase
{
    public function testWithoutParameter()
    {
        $filesourceRow = new FilesourceRow();

        $this->assertEquals('filesource', $filesourceRow->getName());
        $this->assertEquals('@filesource', (string) $filesourceRow);
    }
}
