<?php

namespace Saxulum\Tests\PhpDocGenerator;

use Saxulum\PhpDocGenerator\AuthorRow;

class AuthorRowTest extends \PHPUnit_Framework_TestCase
{
    public function testWithName()
    {
        $authorRow = new AuthorRow('Firstname Lastname');

        $this->assertEquals('author', $authorRow->getName());
        $this->assertEquals('@author Firstname Lastname', (string) $authorRow);
    }

    public function testWithEmail()
    {
        $authorRow = new AuthorRow('Firstname Lastname', 'firstname.lastname@gmail.com');

        $this->assertEquals('author', $authorRow->getName());
        $this->assertEquals('@author Firstname Lastname <firstname.lastname@gmail.com>', (string) $authorRow);
    }
}
