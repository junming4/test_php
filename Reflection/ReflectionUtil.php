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
     * 获取类的详细信息
     * @param ReflectionClass $class
     * @return string
     * @auth xiaojunming<xiaojunming@eelly.net>
     * @since 2017/06/02
     */
    static public function getClassSource(ReflectionClass $class)
    {
        $path = $class->getFileName();
        $lines = @file($path);
        $from = $class->getStartLine();
        $to = $class->getEndLine();
        $len = $to - $from + 1;
        return implode(array_slice($lines, $from - 1, $len));
    }

    /**
     * 获取函数数据
     * @param ReflectionMethod $method
     * @return string
     * @auth xiaojunming<xiaojunming@eelly.net>
     * @since 2017/06/02
     */
    static public function getMethodSource(ReflectionMethod $method)
    {
        $path = $method->getFileName();
        $lines = @file($path);
        $from = $method->getStartLine();
        $to = $method->getEndLine();
        $len = $to - $from + 1;
        return implode(array_slice($lines, $from - 1, $len));
    }

    /**
     * 参数的获取
     * @param ReflectionParameter $param
     * @return string
     * @auth xiaojunming<xiaojunming@eelly.net>
     * @since 2017/06/02
     */
    static public function getParam(ReflectionParameter $param)
    {
        $details = '';
        $param->getDeclaringClass();
        $name = $param->getName();
        $class = $param->getClass();
        $position = $param->getPosition();

        $details .= "{$name} is {$position}\n";
        if (empty($class)) {
            $details .= "{$name} is a obj \n";
        }
        if ($param->isPassedByReference()) { //是否是必须传参数
            $details .= "{$name} is passed by Reference \n";
        }
        if ($param->isDefaultValueAvailable()) { //默认参数
            $def = $param->getDefaultValue();
            $details .= "{$name} has default: {$def} \n";
        }
        return $details;

    }


}
