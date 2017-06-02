<?php
/**
 * 测试函数
 * PHP version 7.0+
 *
 * @copyright  Copyright (c) 2012-2015 EELLY Inc. (http://www.eelly.com)
 * @link       http://www.eelly.com
 * @license    衣联网版权所有
 */


require_once(__DIR__.'/Person.php');

$person = new \Interceptor\Person();

$person->testCall(222, 383838);

unset($person);

exit();
unset($person->userName);

exit();
if (isset($person->userName)) {
    echo "ok";
} else {
    echo "no";
}

exit();
echo $person->name = 4;
exit();

//__get 测试
echo $person->name;
