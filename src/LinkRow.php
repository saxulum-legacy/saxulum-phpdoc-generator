<?php

namespace Saxulum\PhpDocGenerator;

/**
 * @link http://www.phpdoc.org/docs/latest/references/phpdoc/tags/link.html
 */
class LinkRow extends AbstractRow
{
    /**
     * @param string      $uri
     * @param string|null $description
     */
    public function __construct($uri, $description = null)
    {
        $this->addPart($uri);
        $this->addPart($description);
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'link';
    }
}
