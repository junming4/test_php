<?php

/**
 * PHP version 7.0+
 *
 * @copyright  Copyright (c) 2012-2015 EELLY Inc. (http://www.eelly.com)
 * @link       http://www.eelly.com
 * @license    衣联网版权所有
 */

require_once (__DIR__.'/Module.php');

class FtpModule implements Module
{

    /**
     * @param $host
     * @auth xiaojunming<xiaojunming@eelly.net>
     * @since 2017/06/03
     */
    public function setHost($host)
    {
        print "ftpModule::setHost():: $host\n";
    }

    /**
     * @param $user
     * @auth xiaojunming<xiaojunming@eelly.net>
     * @since 2017/06/03
     */
    public function setUser($user)
    {
        print "ftpModule::setUser() :: $user \n";
    }

    public function execute()
    {
        // TODO: Implement execute() method.
    }
}