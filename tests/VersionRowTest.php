<?php

namespace Saxulum\Tests\PhpDocGenerator;

use Saxulum\PhpDocGenerator\VersionRow;

class VersionRowTest extends \PHPUnit_Framework_TestCase
{
    public function testWithVersion()
    {
        $versionRow = new VersionRow('1.0.0');

        $this->assertEquals('version', $versionRow->getName());
        $this->assertEquals('@version 1.0.0', (string) $versionRow);
    }

    public function testWithVersionAndDescription()
    {
        $versionRow = new VersionRow('1.0.0', 'this is a description');

        $this->assertEquals('version', $versionRow->getName());
        $this->assertEquals('@version 1.0.0 this is a description', (string) $versionRow);
    }
}
