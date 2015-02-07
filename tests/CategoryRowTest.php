<?php

namespace Saxulum\Tests\PhpDocGenerator;

use Saxulum\PhpDocGenerator\CategoryRow;

class CategoryRowTest extends \PHPUnit_Framework_TestCase
{
    public function testWithDescription()
    {
        $categoryRow = new CategoryRow('this is a description');

        $this->assertEquals('category', $categoryRow->getName());
        $this->assertEquals('@category this is a description', (string) $categoryRow);
    }
}
