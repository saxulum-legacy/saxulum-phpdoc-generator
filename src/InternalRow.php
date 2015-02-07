<?php

namespace Saxulum\PhpDocGenerator;

/**
 * @link http://www.phpdoc.org/docs/latest/references/phpdoc/tags/internal.html
 */
class InternalRow extends AbstractRow
{
    /**
     * @param string|null $description
     */
    public function __construct($description = null)
    {
        $this->addPart($description);
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'internal';
    }
}
