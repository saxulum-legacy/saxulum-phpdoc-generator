<?php

namespace Saxulum\PhpDocGenerator;

abstract class AbstractRow
{
    /**
     * @var string[]
     */
    protected $parts = array();

    /**
     * @param string|null $part
     * @param string|null $prefix
     * @param string|null $suffix
     */
    protected function addPart($part, $prefix = null, $suffix = null)
    {
        if (null !== $part) {
            if (null !== $prefix) {
                $part = $prefix.$part;
            }
            if (null !== $suffix) {
                $part = $part.$suffix;
            }

            $this->parts[] = $part;
        }
    }

    /**
     * @return string
     */
    public function __toString()
    {
        $string = '@'.$this->getName();
        foreach ($this->parts as $part) {
            $string .= ' '.$part;
        }

        return $string;
    }

    /**
     * @return string
     */
    abstract public function getName();
}
