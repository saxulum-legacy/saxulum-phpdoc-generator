<?php

namespace Saxulum\Tests\PhpDocGenerator;

use Saxulum\PhpDocGenerator\LicenseRow;

class LicenseRowTest extends \PHPUnit_Framework_TestCase
{
    public function testWithName()
    {
        $licenseRow = new LicenseRow('MIT');

        $this->assertEquals('license', $licenseRow->getName());
        $this->assertEquals('@license MIT', (string) $licenseRow);
    }

    public function testWithUrl()
    {
        $licenseRow = new LicenseRow('MIT', 'http://opensource.org/licenses/MIT');

        $this->assertEquals('license', $licenseRow->getName());
        $this->assertEquals('@license http://opensource.org/licenses/MIT MIT', (string) $licenseRow);
    }
}
