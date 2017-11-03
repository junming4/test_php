<?php
declare(strict_types=1);
/**
 * PHP version 5.5
 *
 * @copyright  Copyright (c) 2012-2015 EELLY Inc. (http://www.eelly.com)
 * @link       http://www.eelly.com
 * @license    衣联网版权所有
 */



$str = '`user_id` int(10) unsigned NOT NULL DEFAULT \'0\' COMMENT \'用户ID\',
  `type` tinyint(1) unsigned NOT NULL DEFAULT \'0\' COMMENT \'认证类型：0 个人实名认证 1 企业实名认证\',
  `name` varchar(60) NOT NULL DEFAULT \'\' COMMENT \'真实姓名/企业名称\',
  `license` varchar(20) NOT NULL DEFAULT \'\' COMMENT \'身份证号码/营业执照号\',
  `id_type` tinyint(1) unsigned NOT NULL DEFAULT \'0\' COMMENT \'证件有效期：0 有期限 1 长期\',
  `expiry_date` int(10) unsigned NOT NULL DEFAULT \'0\' COMMENT \'证件到期时间\',
  `bank_id` int(10) unsigned NOT NULL DEFAULT \'0\' COMMENT \'开户银行ID：el_system->system_bank->bank_id\',
  `gb_code` int(9) unsigned NOT NULL DEFAULT \'0\' COMMENT \'开户银行所在地：el_system->system_region->gb_code\',
  `bank_subbranch` varchar(50) NOT NULL DEFAULT \'\' COMMENT \'支行名称\',
  `bank_account` varchar(50) NOT NULL DEFAULT \'\' COMMENT \'银行账号\',
  `cart_pic` varchar(100) NOT NULL DEFAULT \'\' COMMENT \'身份证正面照片/营业执照图片路径\',
  `cart_reversed_pic` varchar(100) NOT NULL DEFAULT \'\' COMMENT \'身份证反面照片\',
  `admin_id` int(10) unsigned NOT NULL DEFAULT \'0\' COMMENT \'管理ID\',
  `admin_name` varchar(60) NOT NULL DEFAULT \'\' COMMENT \'(冗余)管理名称\',
  `audit_time` int(10) unsigned NOT NULL DEFAULT \'0\' COMMENT \'审核时间\',
  `status` tinyint(1) unsigned NOT NULL DEFAULT \'0\' COMMENT \'状态：0 未处理 1 审核通过 2 审核失败\',
  `remark` varchar(60) NOT NULL DEFAULT \'\' COMMENT \'备注\',
  `created_time` int(10) unsigned NOT NULL DEFAULT \'0\' COMMENT \'添加时间\',
  `update_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT \'修改时间\'
  ';

$pattern = '/`([a-zA-Z-_])+`/';
if(preg_match_all($pattern,$str,$match)){

    //Up
    $action = $_REQUEST['action'] ?? 'up';
    $res = $match[0];
    if ($action == 'up') {
        $temp = [];
        foreach ($res as $val) {
            $val = explode('_', $val);
            isset($val[1]) && $val[0] = $val[0] . ucfirst($val[1]);
            $temp[] = $val[0];
        }
        $res = $temp;
        unset($temp);
    } elseif ($action == 'upd') { //小写和大写对应
        $temp = [];
        foreach ($res as $val) {
            $key = $val;
            $val = explode('_', $val);
            isset($val[1]) && $val[0] = $val[0] . ucfirst($val[1]);
            $temp[] = "'{$key}'" . '=>$data[\'' . $val[0] . "']";
        }
        $res = $temp;
        unset($temp);
    } elseif ($action == 'ujson') { //小写和大写对应
        $temp = [];
        foreach ($res as $val) {
            $key = $val;
            $val = explode('_', $val);
            isset($val[1]) && $val[0] = $val[0] . ucfirst($val[1]);
            $temp[] = "'{$val[0]}':'{$key}'";
        }
        $res = $temp;
        unset($temp);
    }
    echo $action== 'upd' ? str_replace('`','',implode(",\r\n",$res)) :str_replace('`','',implode(',',$res));
    echo "\r\n";
}

