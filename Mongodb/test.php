<?php
/**
 * PHP version 7.0+
 *
 * @copyright  Copyright (c) 2012-2015 EELLY Inc. (http://www.eelly.com)
 * @link       http://www.eelly.com
 * @license    衣联网版权所有
 */
include_once('MongoDbClient.php');

$mongoObj = new MongoDbClient();
$mongoObj->setDb('test');

//删除数据

$where = ['age' => 21];

$res = $mongoObj->deleteInfo('test', $where, false);

var_dump($res);

exit();

//更新数据

$where = ['age' => 21];

$set = ['name' => 'x明33xx'];

$res = $mongoObj->updateInfo('test', $where, $set);
var_dump($res);

exit;

//插入部分
$res = $mongoObj->insertInfo('test', ['name'=> '小李','age' => 21, 'sex' => '男']);
var_dump($res);

//查询部分
/*$filter = ['age' => ['$gt'=>0]]; //条件
$options = ['projection' => ['_id' => 0], //过滤不让_id 查询查询
    'sort' => ['age' => -1],];

$res = $mongoObj->query('test', ['age' => ['$gt' => 1]], $options);
var_dump($res);*/
