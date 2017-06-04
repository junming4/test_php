<?php
/**
 * PHP version 7.0+
 *
 * @copyright  Copyright (c) 2012-2015 EELLY Inc. (http://www.eelly.com)
 * @link       http://www.eelly.com
 * @license    衣联网版权所有
 */

require_once('PasswordHelper.php');

//解密需要传入这个值
$input['decodePassword'] = 123456;
//解密部分
$input['timeStamp'] = 1496454823;
$input['encodePassword'] = 'MDAyUGlRa0kwQndYbEFoSmpFeU16UTFOZz09MTk2OWUxNWYzOGYxYzAyNTFiNDFjZmE4YWUwMzRkYmE=';
$input['type'] = 'login';


$psswordHelper = new PasswordHelper($input);

$newPassword = $psswordHelper->encodePassword();
echo  $newPassword;exit;

//密码版本
$passVerArr = array(
    'pay' => "001", //支付
    'login' => "002",//登录
    'registerMobile' => "003" //注册
);

//加密部分
$type = 'login';
$timestamp = 1496454823;
$decodePassword = 123456;

$pass = base64_encode($passVerArr[$type] . base64_encode($passVerArr[$type] . $decodePassword) . md5($passKeyArr[$type] . $timestamp));
echo $pass."<br/>";
echo "MDAyUGlRa0kwQndYbEFoSmpFeU16UTFOZz09MTk2OWUxNWYzOGYxYzAyNTFiNDFjZmE4YWUwMzRkYmE=";

//解密部分
