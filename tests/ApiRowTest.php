<?php

namespace Saxulum\Tests\PhpDocGenerator;

use Saxulum\PhpDocGenerator\ApiRow;

class ApiRowTest extends \PHPUnit_Framework_TestCase
{
    public function testWithoutParameter()
    {
        $apiRow = new ApiRow();

        $this->assertEquals('api', $apiRow->getName());
        $this->assertEquals('@api', (string) $apiRow);
    }
}
