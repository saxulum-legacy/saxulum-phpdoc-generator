<?php

namespace Saxulum\Tests\PhpDocGenerator;

use Saxulum\PhpDocGenerator\CopyrightRow;

class CopyrightRowTest extends \PHPUnit_Framework_TestCase
{
    public function testWithDescription()
    {
        $copyrightRow = new CopyrightRow('mycopyright');

        $this->assertEquals('copyright', $copyrightRow->getName());
        $this->assertEquals('@copyright mycopyright', (string) $copyrightRow);
    }
}
