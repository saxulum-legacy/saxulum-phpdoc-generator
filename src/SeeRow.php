<?php

namespace Saxulum\PhpDocGenerator;

/**
 * @link http://www.phpdoc.org/docs/latest/references/phpdoc/tags/see.html
 */
class SeeRow extends AbstractRow
{
    /**
     * @param string      $uriOrFqsen
     * @param string|null $description
     */
    public function __construct($uriOrFqsen, $description = null)
    {
        $this->addPart($uriOrFqsen);
        $this->addPart($description);
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'see';
    }
}
