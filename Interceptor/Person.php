<?php
/**
 * PHP version 7.0+
 *
 * @copyright  Copyright (c) 2012-2015 EELLY Inc. (http://www.eelly.com)
 * @link       http://www.eelly.com
 * @license    衣联网版权所有
 */


namespace Interceptor;

/**
 * Person
 *
 * @author xiaojunming<xiaojunming@eelly.net>
 * @since 2017/06/01.
 * @version 1.0
 */
class Person
{


    /**
     * TODO __get 测试
     * @param $property
     * @return mixed
     * @auth xiaojunming<xiaojunming@eelly.net>
     * @since 2017/06/01
     */
    public function __get($property)
    {
        $method = "get" . ucfirst($property);
        if (method_exists($this, $method)) {
            return $this->$method();
        }
    }

    /**
     *
     * TODO __set 测试 , 给未定义的测试赋值
     * @param $name
     * @param $value
     * @return mixed
     * @auth xiaojunming<xiaojunming@eelly.net>
     * @since ${DATE}
     */
    public function __set($name, $value)
    {
        $this->$name = $value;
        return $this->$name;
    }

    /**
     * @return string
     * @auth xiaojunming<xiaojunming@eelly.net>
     * @since 2017/06/01
     */
    private function getName()
    {
        return "Bob";
    }

    /**
     * @return int
     * @auth xiaojunming<xiaojunming@eelly.net>
     * @since 2017/06/01
     */
    private function getAge()
    {
        return 44;
    }

    /**
     * todo 判断未存在的属性被调用
     *
     * $person->username
     *
     * @param $property
     * @return bool
     * @auth xiaojunming<xiaojunming@eelly.net>
     * @since 2017/06/01
     */
    public function __isset($property)
    {
        $method = "get" . ucfirst($property);
        return method_exists($this, $method);
    }


    /**
     * todo 删除未定义的数据会被调用
     * @param $property
     * @auth xiaojunming<xiaojunming@eelly.net>
     * @since 2017/06/01
     */
    public function __unset($property)
    {
        $method = "set" . ucfirst($property);
        if (method_exists($this, $method)) {
            $this->$method(null);
        }
        return true;
    }

    /**
     * unset 测试使用
     * @param $name
     * @return mixed
     * @auth xiaojunming<xiaojunming@eelly.net>
     * @since 2017/06/01
     */
    public function setUserName($name)
    {
        return $name;
    }

    /**
     * @return string
     * @auth xiaojunming<xiaojunming@eelly.net>
     * @since 2017/06/01
     */
    public function getUserName()
    {
        return "userName";
    }

    /**
     * todo 未定义函数调用，会自动调用这个函数
     * @param $property
     * @param $args
     * @return string
     * @auth xiaojunming<xiaojunming@eelly.net>
     * @since 2017/06/01
     */
    public function __call($property, $args)
    {
        var_dump($property);
        var_dump($args);
        return "ol";
    }

    /**
     *析构函数
     */
    public function __destruct()
    {
        print_r("删除用户对象");
    }
}
