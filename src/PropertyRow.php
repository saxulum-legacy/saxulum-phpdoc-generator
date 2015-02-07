<?php

namespace Saxulum\PhpDocGenerator;

class PropertyRow extends AbstractRow
{
    /**
     * @param string      $type
     * @param string      $name
     * @param string|null $description
     */
    public function __construct($type, $name, $description = null)
    {
        $this->addPart($type);
        $this->addPart($name, '$');
        $this->addPart($description);
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'property';
    }
}
