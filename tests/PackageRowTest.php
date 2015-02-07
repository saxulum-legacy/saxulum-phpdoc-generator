<?php

namespace Saxulum\Tests\PhpDocGenerator;

use Saxulum\PhpDocGenerator\PackageRow;

class PackageRowTest extends \PHPUnit_Framework_TestCase
{
    public function testWithDescription()
    {
        $packageRow = new PackageRow('this is a description');

        $this->assertEquals('package', $packageRow->getName());
        $this->assertEquals('@package this is a description', (string) $packageRow);
    }
}
