<?php

/**
 * PHP version 7.0+
 *
 * @copyright  Copyright (c) 2012-2015 EELLY Inc. (http://www.eelly.com)
 * @link       http://www.eelly.com
 * @license    衣联网版权所有
 */
class Person
{
    /**
     * @var string
     */
    public $name;

    /**
     * Person constructor.
     * @param string $name
     */
    public function __construct($name)
    {
        $this->name = $name;
    }
}