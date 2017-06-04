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
$productClass = new ReflectionClass('CdProduct');

print_r(ReflectionUtil::getClassSource($productClass));

exit();



//Reflection::export($productClass);
require_once('Deal.php');


echo Deal::classData($productClass);
