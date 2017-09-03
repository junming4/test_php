<?php
/**
 * PHP version 7.0+
 *
 * @copyright  Copyright (c) 2012-2015 EELLY Inc. (http://www.eelly.com)
 * @link       http://www.eelly.com
 * @license    衣联网版权所有
 */
$serv = stream_socket_server("tcp://0.0.0.0:8000", $errno, $errstr)
or die("create server failed");

while(1) {
    $conn = stream_socket_accept($serv);
    if (pcntl_fork() == 0 ) {
        $request = fread($conn);
        fwrite($response);
        fclose($conn);
        exit(0);
    }
}
