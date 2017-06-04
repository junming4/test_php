<?php

/**
 * PHP version 7.0+
 *
 * @copyright  Copyright (c) 2012-2015 EELLY Inc. (http://www.eelly.com)
 * @link       http://www.eelly.com
 * @license    衣联网版权所有
 */
class ReflectionUtil
{


    /**
     * @param ReflectionClass $class
     * @return string
     * @auth xiaojunming<xiaojunming@eelly.net>
     * @since 2017/06/02
     */
    public static function getClassSource(ReflectionClass $class)
    {
        $path = $class->getFileName();
        $lines = @file($path);
        $from = $class->getStartLine();
        $to = $class->getEndLine();
        $len = $to - $from -1;
        return implode(array_slice($lines, $from, $len));
    }
}
