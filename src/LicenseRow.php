<?php

namespace Saxulum\PhpDocGenerator;

/**
 * @link http://www.phpdoc.org/docs/latest/references/phpdoc/tags/license.html
 */
class LicenseRow extends AbstractRow
{
    /**
     * @param string      $name
     * @param string|null $url
     */
    public function __construct($name, $url = null)
    {
        $this->addPart($url);
        $this->addPart($name);
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'license';
    }
}
