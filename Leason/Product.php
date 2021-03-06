<?php

/**
 * PHP version 7.0+
 *
 * @copyright  Copyright (c) 2012-2015 EELLY Inc. (http://www.eelly.com)
 * @link       http://www.eelly.com
 * @license    衣联网版权所有
 */
class Product
{
    private $id = 0;

    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @param $id
     * @param PDO $pdo
     * @return null|Product
     * @auth xiaojunming<xiaojunming@eelly.net>
     * @since ${DATE}
     */
    public static function getInstance($id, PDO $pdo)
    {
        $stmt = $pdo->prepare("SELECT * FROM product where id=?");
        $result = $stmt->execute([$id]);
        $row = $stmt->fetch();
        if (empty($row)) {
            return null;
        }
        if ($row['type'] == 'book') {
        } elseif ($row['type'] == 'cd') {
        } else {
        }
        $product = new Product();
        $product->setId($row['id']);
        return $product;
    }
}
