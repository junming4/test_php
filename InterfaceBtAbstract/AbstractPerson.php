<?php

/**
 * PHP version 7.0+
 *
 * @copyright  Copyright (c) 2012-2015 EELLY Inc. (http://www.eelly.com)
 * @link       http://www.eelly.com
 * @license    衣联网版权所有
 */
abstract class AbstractPerson
{
    /**
     * @var
     */
    protected $name;

    /**
     * @var int
     */
    protected $type = 1;


    /**
     *
     */
    const TYPE_NEWS_PERSON = 1;

    /**
     * @var
     */
    protected $age;
    /**
     * @var
     */
    protected $sex;


    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * @param mixed $age
     */
    public function setAge($age)
    {
        $this->age = $age;
    }

    /**
     * @return mixed
     */
    public function getSex()
    {
        return $this->sex;
    }

    /**
     * @param mixed $sex
     */
    public function setSex($sex)
    {
        $this->sex = $sex;
    }

    /**
     * @var \MongoDB\Driver\Server
     */
    protected $server;

    /**
     * AbstractPerson constructor.
     * @param \MongoDB\Driver\Server $server
     */
    public function __construct(\MongoDB\Driver\Server $server)
    {
        $this->server = $server;
    }


    abstract public function test();
}
