<?php

namespace Saxulum\Tests\PhpDocGenerator;

use Saxulum\PhpDocGenerator\SeeRow;

class SeeRowTest extends \PHPUnit_Framework_TestCase
{
    public function testWithName()
    {
        $seeRow = new SeeRow('http://www.google.com');

        $this->assertEquals('see', $seeRow->getName());
        $this->assertEquals('@see http://www.google.com', (string) $seeRow);
    }

    public function testWithDescription()
    {
        $seeRow = new SeeRow('http://www.google.com', 'this is a description');

        $this->assertEquals('see', $seeRow->getName());
        $this->assertEquals('@see http://www.google.com this is a description', (string) $seeRow);
    }
}
