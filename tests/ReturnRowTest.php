<?php

namespace Saxulum\Tests\PhpDocGenerator;

use Saxulum\PhpDocGenerator\ReturnRow;

class ReturnRowTest extends \PHPUnit_Framework_TestCase
{
    public function testWithType()
    {
        $returnRow = new ReturnRow('string');

        $this->assertEquals('return', $returnRow->getName());
        $this->assertEquals('@return string', (string) $returnRow);
    }

    public function testWithDescription()
    {
        $returnRow = new ReturnRow('string', 'this is a description');

        $this->assertEquals('return', $returnRow->getName());
        $this->assertEquals('@return string this is a description', (string) $returnRow);
    }
}
