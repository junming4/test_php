<?php

/**
 * PHP version 7.0+
 *
 * @copyright  Copyright (c)
 * @link
 * @license
 */
class Deal
{
    /**
     * @param ReflectionClass $class
     * @return string
     * @auth xiaojunming<xiaojunming@eelly.net>
     * @since 2017/06/03
     */
    public static function classData(ReflectionClass $class)
    {
        $details = '';
        $name = $class->getName();

        if ($class->isUserDefined()) { //是否由用户定义的
            $details .= "{$name} is user defined \n";
        }
        if ($class->isInternal()) { //是否是内部的类,Exception 错误类
            $details .= "{$name} is built-in \n";
        }
        if ($class->isInterface()) { //是否是接口
            $details .= "{$name} is interface \n";
        }
        if ($class->isAbstract()) { //是否是抽象类
            $details .= "{$name} is an abstract class \n";
        }
        if ($class->isFinal()) { //是否final 申明的类
            $details .= "{$name} is a final class \n";
        }

        if ($class->isInstantiable()) { //是否能被实例化
            $details .= "{$name} can be instantiable \n";
        } else {
            $details .= "{$name} can not be instantiable \n";
        }

        return $details;
    }


    /**
     *
     * @param ReflectionMethod $method
     * @return string
     * @auth xiaojunming<xiaojunming@eelly.net>
     * @since 2017-06-04 16:29:25
     */
    public static function methodData(ReflectionMethod $method)
    {
        $details = '';
        $name = $method->getName();

        if ($method->isUserDefined()) {
            $details .= "{$name} is user defined \n";
        }
        if ($method->isInternal()) {
            $details .= "{$name} is built-in \n";
        }

        if ($method->isAbstract()) {
            $details .= "{$name} is abstract \n";
        }

        if ($method->isPublic()) {
            $details .= "{$name} is public \n";
        }

        if ($method->isProtected()) {
            $details .= "{$name} is protected \n";
        }
        if ($method->isPrivate()) {
            $details .= "{$name} is private \n";
        }
        if ($method->isStatic()) {
            $details .= "{$name} is static \n";
        }
        if ($method->isFinal()) {
            $details .= "{$name} is final \n";
        }
        if ($method->isConstructor()) {
            $details .= "{$name} is the constructor \n";
        }
        if ($method->returnsReference()) {
            $details .= "{$name} returns a reference (as opposed to as value)\n";
        }
        return $details;
    }

}
