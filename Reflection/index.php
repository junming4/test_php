<?php
/**
 * PHP version 7.0+
 *
 * @copyright  Copyright (c) 2012-2015 EELLY Inc. (http://www.eelly.com)
 * @link       http://www.eelly.com
 * @license    衣联网版权所有
 */

require_once ('ReflectionUtil.php');
require_once('CdProduct.php');
require_once('Deal.php');
$productClass = new ReflectionClass('CdProduct');

$methods = $productClass->getMethods();

foreach ($methods as $method){
    //echo Deal::methodData($method);

    //echo ReflectionUtil::getMethodSource($method);
    $params = $method->getParameters();

    foreach ($params as $param){
        echo ReflectionUtil::getParam($param);
    }


}

exit;

print_r(ReflectionUtil::getClassSource($productClass));

exit();



//Reflection::export($productClass);



echo Deal::classData($productClass);
