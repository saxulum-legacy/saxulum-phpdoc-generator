<?php

namespace Saxulum\Tests\PhpDocGenerator;

use Saxulum\PhpDocGenerator\LinkRow;

class LinkRowTest extends \PHPUnit_Framework_TestCase
{
    public function testWithName()
    {
        $linkRow = new LinkRow('http://www.google.com');

        $this->assertEquals('link', $linkRow->getName());
        $this->assertEquals('@link http://www.google.com', (string) $linkRow);
    }

    public function testWithDescription()
    {
        $linkRow = new LinkRow('http://www.google.com', 'this is a description');

        $this->assertEquals('link', $linkRow->getName());
        $this->assertEquals('@link http://www.google.com this is a description', (string) $linkRow);
    }
}
