<?php

namespace Saxulum\PhpDocGenerator;

/**
 * @link http://www.phpdoc.org/docs/latest/references/phpdoc/tags/throws.html
 */
class ThrowsRow extends AbstractRow
{
    /**
     * @param string $type
     * @param string $description
     */
    public function __construct($type, $description = null)
    {
        $this->addPart($type);
        $this->addPart($description);
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'throws';
    }
}
