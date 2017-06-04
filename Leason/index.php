<?php
/**
 * PHP version 7.0+
 *
 * @copyright  Copyright (c) 2012-2015 EELLY Inc. (http://www.eelly.com)
 * @link       http://www.eelly.com
 * @license    衣联网版权所有
 */

require_once('Product.php');



print_r(get_class_methods('Product'));

$product = new Product();

echo get_class($product);
exit();
$logger = function () {
    return "sksk";
};

print_r($logger);
