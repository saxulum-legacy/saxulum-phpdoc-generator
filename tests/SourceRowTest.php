<?php

namespace Saxulum\Tests\PhpDocGenerator;

use Saxulum\PhpDocGenerator\SourceRow;

class SourceRowTest extends \PHPUnit_Framework_TestCase
{
    public function testWithLocation()
    {
        $sourceRow = new SourceRow('source.php');

        $this->assertEquals('source', $sourceRow->getName());
        $this->assertEquals('@source source.php', (string) $sourceRow);
    }

    public function testWithStartLine()
    {
        $sourceRow = new SourceRow('source.php', 1);

        $this->assertEquals('source', $sourceRow->getName());
        $this->assertEquals('@source source.php 1', (string) $sourceRow);
    }

    public function testWithNumberOfLines()
    {
        $sourceRow = new SourceRow('source.php', 1, 1);

        $this->assertEquals('source', $sourceRow->getName());
        $this->assertEquals('@source source.php 1 1', (string) $sourceRow);
    }

    public function testWithDescription()
    {
        $sourceRow = new SourceRow('source.php', null, null, 'this is a description');

        $this->assertEquals('source', $sourceRow->getName());
        $this->assertEquals('@source source.php this is a description', (string) $sourceRow);
    }
}
