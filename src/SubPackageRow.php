<?php

namespace Saxulum\PhpDocGenerator;

/**
 * @link http://www.phpdoc.org/docs/latest/references/phpdoc/tags/subpackage.html
 */
class SubPackageRow extends AbstractRow
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
        return 'subpackage';
    }
}
