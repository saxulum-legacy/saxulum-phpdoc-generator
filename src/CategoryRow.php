<?php

namespace Saxulum\PhpDocGenerator;

/**
 * @link http://www.phpdoc.org/docs/latest/references/phpdoc/tags/category.html
 * @deprecated use @package
 */
class CategoryRow extends AbstractRow
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
        return 'category';
    }
}
