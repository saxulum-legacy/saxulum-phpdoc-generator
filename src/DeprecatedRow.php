<?php

namespace Saxulum\PhpDocGenerator;

/**
 * @link http://www.phpdoc.org/docs/latest/references/phpdoc/tags/deprecated.html
 */
class DeprecatedRow extends AbstractRow
{
    /**
     * @param string|null $version
     * @param string|null $description
     */
    public function __construct($version = null, $description = null)
    {
        $this->addPart($version);
        $this->addPart($description);
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'deprecated';
    }
}
