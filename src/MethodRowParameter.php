<?php

namespace Saxulum\PhpDocGenerator;

class MethodRowParameter
{
    /**
     * @var string
     */
    protected $var;

    /**
     * @var string|null
     */
    protected $type;

    /**
     * @param string      $var
     * @param string|null $type
     */
    public function __construct($var, $type = null)
    {
        $this->var = $var;
        $this->type = $type;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        if (null !== $this->type) {
            return $this->type.' $'.$this->var;
        }

        return '$'.$this->var;
    }
}
