<?php

/**
 * PHP version 7.0+
 *
 * @copyright  Copyright (c) 2012-2015 EELLY Inc. (http://www.eelly.com)
 * @link       http://www.eelly.com
 * @license    衣联网版权所有
 */
interface InterFacePerson
{
    // public $name; 接口不能定义成员变量
    const TYPE_NEW_PERSON = 1;

    //protected function test(){} //不能使用 {}或者说没有实体，
    //并且不能使用 protected，private 等描述，只能使用public


    public function test();

    public function __construct();
}