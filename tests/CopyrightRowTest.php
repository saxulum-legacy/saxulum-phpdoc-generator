<?php

namespace Saxulum\Tests\PhpDocGenerator;

use Saxulum\PhpDocGenerator\CopyrightRow;

class CopyrightRowTest extends \PHPUnit_Framework_TestCase
{
    public function testWithDescription()
    {
        $copyrightRow = new CopyrightRow('this is a description');

        $this->assertEquals('copyright', $copyrightRow->getName());
        $this->assertEquals('@copyright this is a description', (string) $copyrightRow);
    }
}
