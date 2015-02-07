<?php

namespace Saxulum\PhpDocGenerator;

/**
 * @link http://www.phpdoc.org/docs/latest/references/phpdoc/tags/source.html
 */
class SourceRow extends AbstractRow
{
    /**
     * @param string      $location
     * @param int|null    $startLine
     * @param int|null    $numberOfLines
     * @param string|null $description
     */
    public function __construct($location, $startLine = null, $numberOfLines = null, $description = null)
    {
        $this->addPart($location);
        $this->addPart($startLine);
        $this->addPart($numberOfLines);
        $this->addPart($description);
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'source';
    }
}
