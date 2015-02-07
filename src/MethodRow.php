<?php

namespace Saxulum\PhpDocGenerator;

class MethodRow extends AbstractRow
{
    /**
     * @param string               $name
     * @param string|null          $returnType
     * @param MethodRowParameter[] $parameters
     */
    public function __construct($name, $returnType = null, array $parameters = array())
    {
        $this->addPart($returnType);

        if (count($parameters) === 0) {
            $this->addPart($name, null, '()');
        } else {
            $this->addPart($name, null, '('.$this->handleParameters($parameters).')');
        }
    }

    /**
     * @param  array  $parameters
     * @return string
     */
    protected function handleParameters($parameters = array())
    {
        $parameterString = '';
        foreach ($parameters as $parameter) {
            $parameterString .= (string) $parameter.', ';
        }

        return substr($parameterString, 0, -2);
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'method';
    }
}
