<?php

namespace Saxulum\PhpDocGenerator;

/**
 * @link http://www.phpdoc.org/docs/latest/references/phpdoc/tags/uses.html
 */
class UsesRow extends AbstractRow
{
    /**
     * @param string      $fqsen
     * @param string|null $description
     */
    public function __construct($fqsen, $description = null)
    {
        $this->addPart($fqsen);
        $this->addPart($description);
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'uses';
    }
}
