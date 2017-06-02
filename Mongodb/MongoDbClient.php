<?php

/**
 * PHP version 7.0+
 *
 * @copyright  Copyright (c) 2012-2015 EELLY Inc. (http://www.eelly.com)
 * @link       http://www.eelly.com
 * @license    衣联网版权所有
 */
class MongoDbClient
{
    /**
     * @var MongoClient
     */
    private $mongoServer;

    /**
     * @var
     */
    private $dbName;

    /**
     * MongoDbClient constructor.
     */
    public function __construct()
    {
        if (version_compare(PHP_VERSION, '7.0', 'ge')) {
            $this->mongoServer = new MongoDB\Driver\Manager("mongodb://localhost:27017");
        } else {
            $this->mongoServer = new MongoClient();
        }
    }


    /**
     * @param $dbName
     * @auth xiaojunming<xiaojunming@eelly.net>
     * @since ${DATE}
     */
    public function setDb($dbName)
    {
        $this->dbName = $dbName;
    }

    /**
     * @param $tableName
     * @param $data
     * @return bool|int
     * @auth xiaojunming<xiaojunming@eelly.net>
     * @since ${DATE}
     */
    public function insertInfo($tableName, $data)
    {
        $bulk = new MongoDB\Driver\BulkWrite;
        $document = ['_id' => new MongoDB\BSON\ObjectID];
        $document = array_merge($document, $data);
        $bulk->insert($document);

        $writeConcern = new MongoDB\Driver\WriteConcern(MongoDB\Driver\WriteConcern::MAJORITY, 1000);

        try {
            $obj = $this->mongoServer->executeBulkWrite("{$this->dbName}.{$tableName}", $bulk, $writeConcern);
            return (int)$obj->getInsertedCount();
        } catch (MongoDB\Driver\Exception\WriteException $exception) {
            return false;
        }
    }


    /**
     * 查询数据
     * @param $tableName
     * @param array $filter 查询 条件 mysql where
     * @param array $options //过滤和排序， 相当于 files和 sort
     * @return bool
     * @auth xiaojunming<xiaojunming@eelly.net>
     * @since 2017/05/30
     */
    public function query($tableName, $filter = [], $options = []): array
    {
        $query = new MongoDB\Driver\Query($filter, $options);

        try {
            $cursor = $this->mongoServer->executeQuery("{$this->dbName}.{$tableName}", $query);
            $res = [];
            foreach ($cursor as $document) {
                $res[] = $document;
            }
            return $res;
        } catch (MongoDB\Driver\Exception\Exception $exception) {
            return [];
        }
    }


    /**
     * @param $tableName
     * @param array $where
     * @param array $set
     * @param bool $multi
     * @return int
     * @auth xiaojunming<xiaojunming@eelly.net>
     * @since ${DATE}
     */
    public function updateInfo($tableName, $where = [], $set = [], $multi = true): int
    {
        $bulk = new MongoDB\Driver\BulkWrite;
        $bulk->update(
            $where,
            ['$set' => $set],
            ['multi' => $multi, 'upsert' => false]
        );

        $writeConcern = new MongoDB\Driver\WriteConcern(MongoDB\Driver\WriteConcern::MAJORITY, 1000);
        try {
            $result = $this->mongoServer->executeBulkWrite("{$this->dbName}.{$tableName}", $bulk, $writeConcern);
            return $result->getUpsertedCount(); //TODO 为什么没有作用
        } catch (MongoDB\Driver\Exception\Exception $exception) {
            return 0;
        }
    }

    /**
     * @param $tableName
     * @param array $where
     * @param bool $isDeleteAll
     * @return bool
     * @auth xiaojunming<xiaojunming@eelly.net>
     * @since ${DATE}
     */
    public function deleteInfo($tableName, $where = [], bool $isDeleteAll = true):bool
    {
        $limit = $isDeleteAll ? 0: 1;
        $bulk = new MongoDB\Driver\BulkWrite;
        $bulk->delete($where, ['limit' => $limit]);
        $writeConcern = new MongoDB\Driver\WriteConcern(MongoDB\Driver\WriteConcern::MAJORITY, 1000);
        try {
            $result = $this->mongoServer->executeBulkWrite("{$this->dbName}.{$tableName}", $bulk, $writeConcern);
            return $result->getDeletedCount();
        } catch (MongoDB\Driver\Exception\Exception $exception) {
            return false;
        }
    }
}
