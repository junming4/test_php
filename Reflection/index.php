<?php
/**
 * PHP version 7.0+
 *
 * @copyright  Copyright (c) 2012-2015 EELLY Inc. (http://www.eelly.com)
 * @link       http://www.eelly.com
 * @license    衣联网版权所有
 */

require_once('CdProduct.php');

$productClass = new ReflectionClass('Exception');
//Reflection::export($productClass);
require_once('Deal.php');


echo Deal::classData($productClass);
