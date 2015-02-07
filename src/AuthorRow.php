<?php

namespace Saxulum\PhpDocGenerator;

/**
 * @link http://www.phpdoc.org/docs/latest/references/phpdoc/tags/author.html
 */
class AuthorRow extends AbstractRow
{
    /**
     * @param string      $name
     * @param string|null $email
     */
    public function __construct($name, $email = null)
    {
        $this->addPart($name);
        $this->addPart($email, '<', '>');
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'author';
    }
}
