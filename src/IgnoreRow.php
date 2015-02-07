<?php

namespace Saxulum\PhpDocGenerator;

/**
 * @link http://www.phpdoc.org/docs/latest/references/phpdoc/tags/ignore.html
 */
class IgnoreRow extends AbstractRow
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
        return 'ignore';
    }
}
