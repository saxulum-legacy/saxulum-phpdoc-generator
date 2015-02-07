<?php

namespace Saxulum\PhpDocGenerator;

/**
 * @link http://www.phpdoc.org/docs/latest/references/phpdoc/tags/copyright.html
 */
class CopyrightRow extends AbstractRow
{
    /**
     * @param string $description
     */
    public function __construct($description)
    {
        $this->addPart($description);
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'copyright';
    }
}
