<?php
/*
 * This file is part of eelly package.
 *
 * (c) eelly.com
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Store\Logic\Auth;

use Member\Service\Auth\PersonAuthService;
use Member\Service\MemberService;
use Store\Logic\ContractLogic;
use Store\Logic\Generalize\GeneralizeServiceLogic;
use Store\Logic\StoreLogic;
use Store\Model\Auth\SellerAuthModel;
use Swallow\Base\Logic;
use Swallow\Exception\LogicException;
use Swallow\Exception\StatusCode;
use Swallow\Toolkit\Util\Time;

/**
 * 卖家认证
 *
 * @author 肖俊明<xiaojunming@eelly.net>
 *
 * @since  2017年07月04日
 *
 * @version 1.0
 */
class SellerAuthLogic extends Logic
{
    /**
     * 更新或者增加卖家认证初始化数据.
     *
     * @param int $storeId
     * @param int $status
     *
     * @return array
     * @auth 肖俊明<xiaojunming@eelly.net>
     *
     * @since 2017年07月04日
     */
    public function getSellerAuthDataForApp($storeId, $status = 0)
    {
        $storeId = (int) $storeId;
        if ($storeId < 1) {
            throw new LogicException('店铺ID不能为空', StatusCode::INVALID_ARGUMENT);
        }
        //查询店铺是否存在
        $isStore = StoreLogic::getInstance()->isExistById($storeId, 1);
        if ($isStore < 1) {
            return [];
        }
        $res = SellerAuthModel::getInstance()->getInfo($storeId, $status, true);

        //返回的数组
        $result = [
            'isUpdate' => false,
            'auditTime' => 0
        ];
        if (!empty($res)) { //存在品牌数据
            //获取修改时数据
            $status  = (int)$res['status'];
            $auditTime = (int) $res['audit_time'];
            if ($res['expire_time'] != 0 && Time::gmtime() > $res['expire_time']) {
                $status = 3;
            }
            $alertMsg = SellerAuthModel::getInstance()->getStatusInfo($res['status']);
            if ($status == 1) {
                $res['auditTime'] = $auditTime;
                $res['expireTime'] = $res['expire_time'];
            } elseif (in_array($res['status'],[2,3,5])) {
                $res['failReason'] = trim($res['audit_reason']);
            }
            $isUpdate = true;
            $res['applyTime'] =  (int) $res['created_time'];
            //删除没有用的字段
            unset($res['created_time'], $res['update_time'],
                $res['expire_time'], $res['store_id'], $res['audit_reason'], $res['audit_name'], $res['audit_time']);
        }
        if (empty($res)) { //如果为空的时候去获取实名认证数据
            $data = PersonAuthService::getInstance()->getInfoByUserIds([$storeId]);
            $res['name'] = isset($data[$storeId]['real_name']) && in_array($data[$storeId]['name_audite'], [1, 8]) ? trim($data[$storeId]['real_name']) : '';
            $res['license'] = isset($data[$storeId]['id_card']) && in_array($data[$storeId]['name_audite'], [1, 8]) ? trim($data[$storeId]['id_card']) : '';
            $res['mobile'] = isset($data[$storeId]['phone']) && in_array($data[$storeId]['phone'], [1, 8]) ? trim($data[$storeId]['phone']) : '';
        }
        //不可修改的数据
        $storeName = StoreLogic::getInstance()->getStoreNameByIds([$storeId]);
        $res['storeName'] = isset($storeName[$storeId]) ? trim($storeName[$storeId]) : '';
        $accountName = MemberService::getInstance()->getUserNameInfo([$storeId]);
        $res['accountName'] = isset($accountName[$storeId]['userName']) ? trim($accountName[$storeId]['userName']) : '';
        $isPayed = false;
        if ($this->isPayed($storeId, $auditTime)) { //是否已经支付过了
            $isPayed = true;
        } else {
            $generalizeService = GeneralizeServiceLogic::getInstance()->getInfoByGsId(SellerAuthModel::getInstance()->getServerId());
            $res['gsId'] = SellerAuthModel::getInstance()->getServerId();
            $res['payMoney']  = isset($generalizeService['caution_money']) ? $generalizeService['caution_money'] : '';
            $res['payLogo'] = isset($generalizeService['logo_url']) ? trim($generalizeService['logo_url']) : '';
        }
        $res['isPayed'] = $isPayed;
        $res['isUpdate'] = $isUpdate; //是否是更新
        return $res;
    }

    /**
     * 更新或者修改数据.
     *
     * @param int    $storeId
     * @param string $name
     * @param string $license
     * @param string $mobile
     * @return array
     * @auth 肖俊明<xiaojunming@eelly.net>
     *
     * @since 2017年07月04日
     */
    public function saveSellerAuthForApp($storeId, $name, $license, $mobile)
    {
        $storeId = (int) $storeId;
        if ($storeId < 1) {
            throw new LogicException('参数错误', StatusCode::INVALID_ARGUMENT);
        }
        $name = trim($name);
        $license = trim($license);
        $mobile = trim($mobile);
        if (strlen($name) < 1) {
            throw new LogicException('真实姓名不能为空', StatusCode::INVALID_ARGUMENT);
        }
        if (strlen($license) < 1) {
            throw new LogicException('请身份证号码', StatusCode::INVALID_ARGUMENT);
        }
        if (strlen($mobile) < 1 || !preg_match('/[0-9]{11}/', $mobile)) {
            throw new LogicException('手机号码格式不正确！', StatusCode::INVALID_ARGUMENT);
        }
        //查询店铺是否存在
        $isStore = StoreLogic::getInstance()->isExistById($storeId, 1);
        if ($isStore < 1) {
            throw new LogicException('店铺已经关闭或者不存在', StatusCode::INVALID_ARGUMENT);
        }
        $res = SellerAuthModel::getInstance()->getInfo($storeId, 0, true);
        $data = [
            'name'    => addslashes($name),
            'license' => addslashes($license),
            'mobile'  => addslashes($mobile),
        ];
        // 是否需要支付
        if (empty($res)) { //进入增加状态
            $data['store_id'] = $storeId;
            $data['created_time'] = Time::gmtime();
            $data['status'] = 0;
            SellerAuthModel::getInstance()->insert($data); //没有自定增的时候，插入会返回空
            $info = true;
        } else {
            //更进一步的判断，是否是审核状态并且支付过的
            $data['status'] = 0;
            if (in_array($res['status'], [2, 4])) {
                $data['status'] = 4;
            }
            $data['update_time'] = date('Y-m-d H:i:s', Time::gmtime());
            $info = (bool)SellerAuthModel::getInstance()->updateSellerAuth($storeId, $data);
        }
        $result['result'] = $info;
        return $result;
    }


    /**
     * 更新数据
     *
     * @param int $storeId 店铺ID
     * @param array $data 更新数据
     * @return array
     * @auth 肖俊明<xiaojunming@eelly.net>
     * @since 2017年07月07日
     */
    public function updateSellerAuth($storeId, array $data)
    {
        $storeId = (int)$storeId;
        if ($storeId < 1) {
            throw new LogicException('店铺ID不能为空', StatusCode::INVALID_ARGUMENT);
        }
        if (empty($data)) {
            throw new LogicException('参数不能为空', StatusCode::INVALID_ARGUMENT);
        }
        $result['result'] = (bool)SellerAuthModel::getInstance()->updateSellerAuth($storeId, $data);
        return $result;
    }

    /**
     * 支付过的服务
     *
     * @param int $storeId   店铺ID
     * @param int $auditTime 审核时间
     *
     * @return bool | true 表示支付过的服务，0 表示未支付过服务
     * @auth 肖俊明<xiaojunming@eelly.net>
     *
     * @since 2017年07月03日
     */
    private function isPayed($storeId, $auditTime)
    {
        $storeId = (int) $storeId;
        $data = ContractLogic::getInstance()->getFreeStoreContract([$storeId]);

        if (isset($data[$storeId]) && $data[$storeId] == 0) { //付费版
            return true;
        }
        //TODO 审核不通过，已经支付过的数据, 可以根据是否，pay_status =1, status = 1[表示已经被使用，有可能是旧的]，
        $info = GeneralizeServiceLogic::getInstance()->getGeneralizeInfo($storeId, SellerAuthModel::getInstance()->getServerId());
        if (!empty($info) && $auditTime > 0 && $auditTime + 365 * 24 * 3600 < Time::gmtime()) {
            return true;
        }

        return false;
    }


    /**
     * 获取卖家认证的基本信息
     *
     * @param int $storeId 店铺ID
     * @param int $status
     * @param string $filedScope
     * @return array
     * @auth 肖俊明<xiaojunming@eelly.net>
     * @since 2017年07月05日
     */
    public function getSellerAuthInfo($storeId, $status = 0, $filedScope = 'base')
    {
        $storeId = (int)$storeId;
        if ($storeId < 1) {
            throw new LogicException('店铺ID不能为空', StatusCode::INVALID_ARGUMENT);
        }
        //查询店铺是否存在
        $isStore = StoreLogic::getInstance()->isExistById($storeId, 1);
        if ($isStore < 1) {
            return [];
        }
        $res = SellerAuthModel::getInstance()->getInfo($storeId, $status, $filedScope);
        return $res;
    }



}
