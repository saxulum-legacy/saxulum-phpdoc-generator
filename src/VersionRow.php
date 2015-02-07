<?php

namespace Saxulum\PhpDocGenerator;

/**
 * @link http://www.phpdoc.org/docs/latest/references/phpdoc/tags/deprecated.html
 */
class VersionRow extends AbstractRow
{
    /**
     * @param string      $vector
     * @param string|null $description
     */
    public function __construct($vector, $description = null)
    {
        $this->addPart($vector);
        $this->addPart($description);
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'version';
    }
}
