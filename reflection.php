<?php
/**
 * php7.0+
 *
 * @copyright  Copyright (c) 2012-2015 EELLY Inc. (http://www.eelly.com)
 * @link       http://www.eelly.com
 * @license    衣联网版权所有
 */

include_once('Demo/Person.php');

$person = new Person();

function test2(int ... $a)
{
    return array_sum($a);
}

var_dump(test2(2));

exit;
$class = new  ReflectionClass('Person');


var_dump($class->getDocComment());

$properties = $class->getProperties();
var_dump($properties);



foreach ($properties as $class_name) {
    echo $class_name."<br/>";
}

echo "ok";
