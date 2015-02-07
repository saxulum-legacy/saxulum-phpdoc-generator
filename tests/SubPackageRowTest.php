<?php

namespace Saxulum\Tests\PhpDocGenerator;

use Saxulum\PhpDocGenerator\SubPackageRow;

class SubPackageRowTest extends \PHPUnit_Framework_TestCase
{
    public function testWithDescription()
    {
        $subPackageRow = new SubPackageRow('this is a description');

        $this->assertEquals('subpackage', $subPackageRow->getName());
        $this->assertEquals('@subpackage this is a description', (string) $subPackageRow);
    }
}
