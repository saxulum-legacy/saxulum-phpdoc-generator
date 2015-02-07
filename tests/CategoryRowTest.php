<?php

namespace Saxulum\Tests\PhpDocGenerator;

use Saxulum\PhpDocGenerator\CategoryRow;

class CategoryRowTest extends \PHPUnit_Framework_TestCase
{
    public function testWithDescription()
    {
        $categoryRow = new CategoryRow('mycategory');

        $this->assertEquals('category', $categoryRow->getName());
        $this->assertEquals('@category mycategory', (string) $categoryRow);
    }
}
