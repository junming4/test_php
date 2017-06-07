<?php

/**
 * PHP version 7.0+
 *
 * @copyright  Copyright (c) 2012-2015 EELLY Inc. (http://www.eelly.com)
 * @link       http://www.eelly.com
 * @license    衣联网版权所有
 */
require_once (__DIR__.'/Module.php');

/**
 * PersonModule
 *
 * @author xiaojunming<xiaojunming@eelly.net>
 * @since  2017-06-04 17:58:20
 * @version 1.0
 */

class PersonModule implements Module
{
    /**
     * @param Person $person
     * @auth xiaojunming<xiaojunming@eelly.net>
     * @since 2017/MM/dd HH:mm:ss
     */
    public function setPerson(Person $person)
    {
        print "PersonModule::setPerson():{$person->name}\n";
    }

    /**
     * @auth xiaojunming<xiaojunming@eelly.net>
     * @since 2017-06-04 17:58:20
     */
    public function execute()
    {
        // TODO: Implement execute() method.
    }
}