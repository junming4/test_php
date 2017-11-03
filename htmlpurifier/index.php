<?php
declare(strict_types=1);
/**
 * PHP version 5.5
 *
 * @copyright  Copyright (c) 2012-2015 EELLY Inc. (http://www.eelly.com)
 * @link       http://www.eelly.com
 * @license    衣联网版权所有
 */
require_once ('vendor/autoload.php');

$config = HTMLPurifier_Config::createDefault();

// configuration goes here:
$config->set('Core.Encoding', 'UTF-8'); // replace with your encoding
$config->set('HTML.Doctype', 'XHTML 1.0 Transitional'); // replace with your doctype

$purifier = new HTMLPurifier($config);

// untrusted input HTML
$html = '<b>Simple and short';

$pure_html = $purifier->purify($html);

echo '<pre>' . htmlspecialchars($pure_html) . '</pre>';
