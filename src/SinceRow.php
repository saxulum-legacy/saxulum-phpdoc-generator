<?php

namespace Saxulum\PhpDocGenerator;

/**
 * @link http://www.phpdoc.org/docs/latest/references/phpdoc/tags/since.html
 */
class SinceRow extends AbstractRow
{
    /**
     * @param string      $version
     * @param string|null $description
     */
    public function __construct($version, $description = null)
    {
        $this->addPart($version);
        $this->addPart($description);
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'since';
    }
}
