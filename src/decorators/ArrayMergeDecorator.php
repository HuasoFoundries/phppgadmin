<?php

/**
 * PHPPgAdmin 6.1.3
 */

namespace PHPPgAdmin\Decorators;

class ArrayMergeDecorator extends Decorator
{
    public $m;
    public function __construct($arrays)
    {
        $this->m = $arrays;
    }

    /**
     * @return array
     */
    public function value($fields)
    {
        $accum = [];

        foreach ($this->m as $var) {
            $accum = \array_merge($accum, Decorator::get_sanitized_value($var, $fields));
        }

        return $accum;
    }
}
