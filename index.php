<?php

$rules = [
    'type' => [
        [
            'type' => 'inclusion',
            'message' => '类型不能为空',
            'option' => [
                'domain' => [1, 2, 3, 4]
            ],
        ]
    ],
    'goodsId,adminId' => [
        [
            'type' => 'digit',
            'message' => '非法商品ID,非法管理员ID',
            'option' => []
        ],
    ],
    'remark' => [
        [
            'type' => 'require',
            'message' => 'remark 非法格式'
        ],
    ]
];
phpinfo();exit;
$conn = mysqli_connect('172.18.107.96','devmall', 'devmall', 'malltest', 3306);
var_dump($conn);
echo "xiaojunming";
phpinfo();
exit();

exit;
$startTime = microtime(true);
$endTime = microtime(true);

echo round($endTime-$startTime,3);

exit;
$data = array(
    [
        '姳姿女鞋旗舰店	',
        '店铺名',
        '店主名',
        '诚信保证金余额',
        '诚信保证状态',
        '充值日期',
        '充值人员',
        '商品专员'
    ],
    [
        '姳姿女鞋旗舰店	',
        '店铺名',
        '店主名',
        '诚信保证金余额',
        '诚信保证状态',
        '充值日期',
        '充值人员',
        '商品专员'
    ]

);
header("Content-type: application/unknown");
header("Content-Disposition: attachment; filename=tttt.csv");

//since 2017-06-17 使用iconv 该使用了mb_convert_encoding，修改原因由于iconv不支持 gb2312//IGNORE
//$to_charset .=  '//IGNORE';
foreach ($data as $row){
    foreach ($row as $key => $col){
        $col = mb_convert_encoding($col, 'gbk123', 'utf-8');
        $val = _replace_special_char($col);
        $row[$key] = is_numeric($col) ? $val."\t" : $val;
    }
    echo join(',', $row) . "\r\n";
}


/**
 * 替换影响csv文件的字符
 *
 * @param $str string 处理字符串
 */
function _replace_special_char($str, $replace = true){
    $str = str_replace("\r\n", "", $str);
    $str = str_replace("\t", "    ", $str);
    $str = str_replace("\n", "", $str);
    if ($replace == true){
        $str = '"' . str_replace('"', '""', $str) . '"';
    }
    return $str;
}

exit;
$user = [ 0=> NULL ];

$user = array_filter($user);
var_dump($user);exit;

//发送邮件测试

require ('./phpmailer/PHPMailerAutoload.php');

$mail = new PHPMailer;

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.qq.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = '2284876299@qq.com';                 // SMTP username
$mail->Password = 'aqrbvebjhbmjdjda';                           // SMTP password
$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465;                                    // TCP port to connect to

$mail->setFrom('2284876299@qq.com', 'Mailer');
$mail->addAddress('13512719787@163.com', 'Joe User');     // Add a recipient
$mail->addAddress('13512719787@163.com');               // Name is optional
$mail->addReplyTo('13512719787@163.com', 'Information');

$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Here is the subject';
$mail->Body    = 'This is the HTML message body <b>in bold!</b>';
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}

exit;
$start = microtime(true);
$factorial = function( $n ) use ( &$factorial ) {
    if( $n == 1 ) return 1;
    return $factorial( $n - 1 ) * $n;
};
print $factorial( 5 ).'s \n php:';
$start = microtime(true) - $start;
echo $start;
exit;

echo 2000.00	+2000.00	+50.00	+2000.00	+2000.00	+2000.00	+2000.00	+2000.00	+2000.00	+2000.00	+0.01	+100.00	+500.00	+500.00	+2000.00	+2000.00	+0.01	+0.01	+0.01	+100.00	+0.04	+0.01	+0.01	+0.01	+0.01	+0.01	+0.01	+0.01	+2000.04	+0.00	+0.00	+0.01	+0.01	+0.01	+0.01	+0.01	+0.01	+2000.00	+2000.00	+0.01	+1.00	+0.01	+0.01	+2.00	+0.01	+0.01	+2000.00	+0.01	;
exit;
/*$str = '{"store_id":"936","store_name":"22233","owner_name":"","tel":"","domain":null,"state":"1","open_time":"1501703712","add_time":"1501703712","addition_flag":"0","store_logo":null,"store_photo":null,"deal_in":null,"is_mix":"0","mix_num":"0","mix_money":"0","rebuy_rank":"0.00","py_store_name":"","is_promise":"16","commission_rate":"-1.000","is_watermark":"1","lastupdatetime":"2017-08-03 12:01:10","mobile":"","credit_mark":"0","watermark_set":null,"street_addr":"","defendant_store_id":"0","is_app":"0","is_fenxiao":"0","credit_value":null,"added_credit":"0","praise_rate":100,"goods_count":"1","orders_count":"0","arbite_sum":"0","packet_url":"","state_expire_time":"0","is_manage":"0","end_time":"1533239712","limit_activity_expire_time":"0","hide_store_expire_time":"0","protect_pwd":"","property":false,"self_marketing_type":"1","store_keywords":null,"store_description":null,"sell_yesterday":"0","is_new_tpl":null,"present_ad_money":"0.00","design_ad_num":"0","template_type":"4","eval_goods_icon":"0d1","eval_service_icon":"0d1","eval_feedback_icon":"0d1","credit_image":"s_red_1.gif","store_owner":{"user_id":"936","user_name":"\u661f\u661f\u77e5\u6211\u5fc3","email":"ry818@ry818.com","real_name":"","gender":"0","im_qq":"987654321","phone_tel":"7777777","birthday":"0","phone_mob":"","nickname":"\u661f\u661f\u77e5\u6211\u5fc3","is_nickname_edit":"0","region":"300","lastupdatetime":"2015-07-15 14:54:29"},"region_name":null,"region_name_city":"\u5317\u4eac\u5e02 \u5e02\u8f96\u533a","store_navs":[],"domainArr":{"mall":"https:\/\/www.eelly.dev\/store-936.html","mobile":"https:\/\/m.eelly.test\/store-936.html","cloud":"https:\/\/wap.blty.test\/store-936.html"},"store_gcates":[],"store_degree":4,"store_quantity":0,"order_count":0,"buyer_count":0,"evaluation_cout":[],"real_shot":"0","return_goods_status":"0","auth_all":{"is_behalfof":"0","is_entity":0,"is_enterprise":0,"is_time_shipping":0,"is_integrity":0,"is_fitting_on":0,"is_counter_genuine":0,"is_mobile_payment":0,"is_hot":0,"is_brand_credit":0,"is_seller_credit":0},"integrity_service_money":0,"tel_ori":"","store_authentication":0,"area_authentication":0,"credit_bar":{"1":{"total":0,"bar_width":0},"2":{"total":0,"bar_width":0},"3":{"total":0,"bar_width":0}},"good_rate":"0.00","z_rate":"0.00","c_rate":"0.00","praise_rate_com":"\u003Cstrong style=\"color:red;\"\u003E\u9ad8\uff1a+3.82%\u003C\/strong\u003E","praise_rate_com_org":"\u003Cem class=\"c_red\"\u003E\u9ad8:3.82%\u003C\/em\u003E","arbite_com":"\u003Cstrong style=\"color:#6F9A3E;\"\u003E\u4f4e:5.5%\u003C\/strong\u003E","sjb_auth":0,"refund_count":0,"arbit_count":0,"punish_count":0,"store_age":"1\u5e74","has_new_tpl":true,"kefu":[],"im_qq":"","im_ww":"","store_credit_image":"s_red_1.gif","store_credit_value":"0","store_praise_rate":100,"user_id":0,"user_name":"\u661f\u661f\u77e5\u6211\u5fc3","nickname":"\u661f\u661f\u77e5\u6211\u5fc3","is_nickname_edit":"0","email":"ry818@ry818.com","phone_mob":"","pe_credit":1,"pe_region":"","deal_times":0,"deal_amount":0,"email_not_verify":1,"phone_not_verify":1,"problem_not_verify":1,"passwd_power":"2","user_black_status":0,"has_store":"936","s":{"936_936":{"privs":"all","store_name":"22233","is_watermark":"1","domain":null,"user_id":"936","store_id":"936"}},"real_name":"","add_goods_expire_time":0,"low_price_status":0,"low_price_margen":0,"entity_status":"6","open_status":"0","kefu_unique_id":"","last_login":"1501710769","last_ip":"172.18.107.254","manage_store":"936","login_users_info_repeat_fronted":true,"base_show_window":4,"had_show_window":"0","left_show_window":4,"total_show_window":4,"last_month_sale_amount":0,"last_month_addition_show_window":0,"this_month_sale_amount":0,"this_month_addition_show_window":0,"portrait":"https:\/\/uc.eelly.test\/avatar.php?uid=0&size=middle","myAccount":{"pm_id":"296285157","uid":"0","user_name":"","money":"0.00","lastlogin":null,"lastcharge":null,"extract_rate":"0.000","lastdraw":null,"enterprise_audite":"0","bank_subbranch":"","pay_account":"","address":"","pay_password":"","enterprise_audite_fail":null,"cart_reversed_pic":null,"frozenmoney":"0.00","wechat_purse_open_id":"","lastupdatetime":"2017-03-29 14:35:54","phone_audite":"1","email_audite":"0","problem_audite":"0","name_audite":"0","encashmoney":"0.00","yesmoney":"0.00"}}';


echo $str;

exit;
$str = '{"store_id":"148086","store_name":"ACERF","owner_name":"lixulei","tel":"13631858611","domain":"moq","state":"1","open_time":"1385827200","add_time":"1274485862","addition_flag":"0","store_logo":"G01\/M00\/00\/06\/oYYBAFkZZZuIdMsyAADndep-pV8AAACWwGfqZIAAOeN506.jpg","store_photo":"G02\/M00\/00\/02\/ooYBAFesQm6INAK_AABBaav6HIUAAABDgAjnUIAAEGB823.jpg","deal_in":"\u4e0d\u662f\u7684\u5065\u5eb7\u4e0dvisd","is_mix":"1","mix_num":"3","mix_money":"100","rebuy_rank":"46.56","py_store_name":"M","is_promise":"16","commission_rate":"-1.000","is_watermark":"1","lastupdatetime":"2017-07-27 16:35:54","mobile":"13631858611","credit_mark":"2","watermark_set":"1**0**3**Microsoft YaHei**24","street_addr":"ydtygf","defendant_store_id":"0","is_app":"0","is_fenxiao":"1","credit_value":"430","added_credit":"0","praise_rate":96.35,"goods_count":"132","orders_count":"1184","arbite_sum":"44","packet_url":"a:3:{i:0;b:0;s:8:\"sjb_time\";i:1438111205;s:7:\"sjb_url\";s:59:\"http:\/\/static.eelly.test\/share\/000\/148\/086\/moqall_eelly.zip\";}","state_expire_time":"0","is_manage":"1","end_time":"1769635200","limit_activity_expire_time":"0","hide_store_expire_time":"0","protect_pwd":"123456","property":{"0":false,"sjb_time":1438111205,"sjb_url":"http:\/\/static.eelly.test\/share\/000\/148\/086\/moqall_eelly.zip","sjb_goods_count":15},"self_marketing_type":"2","store_keywords":"\u4e00\u4ef6\u4ee3\u53d1,\u670d\u88c5\u6279\u53d1","store_description":"\u6b3e\u5f0f\u591a\uff0c\u6b3e\u5f0f\u65b0\u9896\u5b57\u6570\u8981\u591a\uff0c\u624d\u663e\u5f97\u725b\u903c en","sell_yesterday":"0","is_new_tpl":null,"present_ad_money":"0.00","design_ad_num":"0","template_type":"4","eval_goods_icon":"0d1","eval_service_icon":"0d1","eval_feedback_icon":"0d1","credit_image":"s_blue_4.gif","store_owner":{"user_id":"148086","user_name":"molimoq","email":"1322342345@qq.com","real_name":"eelly","gender":"0","im_qq":"111","phone_tel":"13632444448","birthday":"0","phone_mob":"17000335263","nickname":"\u4f60\u597d\u5440122\u7a0d\u7b49","is_nickname_edit":"1","region":"440106","lastupdatetime":"2017-05-26 16:12:24"},"region_name":null,"region_name_city":"\u5e7f\u4e1c\u7701 \u7ad9\u897f\u670d\u88c5\u57ce4\u5c42","store_navs":{"3616":{"article_id":"3616","title":"\u5bfc\u822a\u5185\u5bb9ll"},"23171":{"article_id":"23171","title":"\u5e97\u94fa\u88c5\u4fee\u5730\u5740"},"41470":{"article_id":"41470","title":"555kkkk"},"41471":{"article_id":"41471","title":"77777"},"41767":{"article_id":"41767","title":"\u81ea\u5b9a\u4e49\u5bfc\u822a"},"44818":{"article_id":"44818","title":"\u597d\u597d\u5de5\u4f5c"},"44819":{"article_id":"44819","title":"\u5362\u52b2"},"44821":{"article_id":"44821","title":"\u65f6\u95f4\u8bfb\u53d6"},"44822":{"article_id":"44822","title":"\u65f6\u95f4\u5c31\u662f\u751f\u547d"},"44823":{"article_id":"44823","title":"\u5931\u8d25"},"44826":{"article_id":"44826","title":"\u81ea\u5df1\u7684\u7231"},"44827":{"article_id":"44827","title":"\u5468\u56f4\u7684\u4eba"},"44828":{"article_id":"44828","title":"\u7a33\u7a33\u7684\u5e78\u798f"},"44837":{"article_id":"44837","title":"\u8bd5\u8bd5\u770b"},"44848":{"article_id":"44848","title":"1111"},"44849":{"article_id":"44849","title":"1111"},"44850":{"article_id":"44850","title":"[[]"},"44851":{"article_id":"44851","title":"lll"},"44852":{"article_id":"44852","title":"ggg"},"44853":{"article_id":"44853","title":"gg"},"44854":{"article_id":"44854","title":"gggg"},"44855":{"article_id":"44855","title":"xxxx"},"44856":{"article_id":"44856","title":"qqq"},"44859":{"article_id":"44859","title":"ggg"},"44860":{"article_id":"44860","title":"ggh"},"44861":{"article_id":"44861","title":"ffff"},"44862":{"article_id":"44862","title":"fff"},"44863":{"article_id":"44863","title":"gggg"},"44864":{"article_id":"44864","title":"jjj"},"44865":{"article_id":"44865","title":"opopo"},"44866":{"article_id":"44866","title":"jkj"},"44867":{"article_id":"44867","title":"iui"},"44868":{"article_id":"44868","title":"ggg"},"44869":{"article_id":"44869","title":"gggg"},"44870":{"article_id":"44870","title":"ggg"},"44871":{"article_id":"44871","title":"kk"},"44872":{"article_id":"44872","title":"bbbbbb"},"44873":{"article_id":"44873","title":"ggg"},"44874":{"article_id":"44874","title":"k\'k"},"44875":{"article_id":"44875","title":"llll"},"44876":{"article_id":"44876","title":"dddd"},"44879":{"article_id":"44879","title":"ggg"},"44880":{"article_id":"44880","title":"ggg"},"44905":{"article_id":"44905","title":"haha"},"44928":{"article_id":"44928","title":"\u6d4b\u8bd5\u6302\u677f\u8bd5\u5356\u6807\u8bc6"},"44931":{"article_id":"44931","title":"goog"},"44949":{"article_id":"44949","title":"\u4fe1\u8a89\u4fdd\u969c"},"44950":{"article_id":"44950","title":"test"},"44951":{"article_id":"44951","title":"testNg"},"45001":{"article_id":"45001","title":"\u4e00\u4ef6\u4ee3\u53d1"}},"domainArr":{"mall":"https:\/\/moq.eelly.dev","mobile":"https:\/\/m.eelly.test\/store-148086.html","cloud":"https:\/\/wap.blty.test\/store-148086.html"},"store_gcates":[{"id":"223298","value":{"cate_name":"\u660e\u660e\u660e\u660e\u660e\u660e\u660e\u660e\u660e\u660e","is_show":"1","is_opend":"1"},"children":[{"id":"225429","value":{"cate_name":"aaa111","is_show":"1"},"children":[]},{"id":"225430","value":{"cate_name":"aaa222","is_show":"1"},"children":[]}]},{"id":"223632","value":{"cate_name":"\u5973\u88c5\/\u8fde\u8863\u88d9","is_show":"1","is_opend":"1"},"children":[]},{"id":"223633","value":{"cate_name":"\u7bb1\u5305\/\u624b\u63d0\u5305","is_show":"1","is_opend":"1"},"children":[]},{"id":"223634","value":{"cate_name":"\u8863\u9970\/\u624b\u5957","is_show":"1","is_opend":"1"},"children":[]}],"store_degree":4,"store_quantity":180757,"order_count":2616,"buyer_count":225,"evaluation_cout":[{"seller_id":"148086","credit":"1188","evaluation_count":"778","praise_count":"750"}],"real_shot":"0","return_goods_status":"0","auth_all":{"is_behalfof":"1","is_entity":0,"is_enterprise":1,"is_time_shipping":0,"is_integrity":0,"is_fitting_on":0,"is_counter_genuine":0,"is_mobile_payment":0,"is_hot":0,"is_brand_credit":0,"is_seller_credit":0},"integrity_service_money":"0.03","tel_ori":"13631858611","store_authentication":1,"area_authentication":0,"credit_bar":{"3":{"total":750,"bar_width":150},"1":{"total":14,"bar_width":3},"2":{"total":14,"bar_width":3}},"good_rate":"96.40","z_rate":"1.80","c_rate":"1.80","praise_rate_com":"\u003Cstrong style=\"color:red;\"\u003E\u9ad8\uff1a+0.17%\u003C\/strong\u003E","praise_rate_com_org":"\u003Cem class=\"c_red\"\u003E\u9ad8:0.17%\u003C\/em\u003E","arbite_com":"\u003Cstrong style=\"color:#6F9A3E;\"\u003E\u4f4e:1.78%\u003C\/strong\u003E","sjb_auth":15,"refund_count":0,"arbit_count":0,"punish_count":0,"store_age":"4\u5e74\u8001","has_new_tpl":true,"kefu":[{"title":"1111","work_s":"0","work_e":"6","phone":"13915789189 ","display_phone":"on","sk_id":"66532","cs":[{"type":"0","title":"\u5c0fQ","number":"603284696","skn_id":"92612"},{"type":"1","title":"\u73ca\u745a","number":"qqsiou@126.com","skn_id":"92623"}]},{"title":"2323","work_s":"8","work_e":"23","phone":"13758484848 ","display_phone":"on","sk_id":"66568","cs":[{"type":"0","title":"454545","number":"774773215","skn_id":"92775"},{"type":"1","title":"1352552","number":"13226676375","skn_id":"92776"},{"type":"0","title":"\u5927\u5c11","number":"800037035","skn_id":"92779"},{"type":"0","title":"\u8fbe\u4eba","number":"1876423030","skn_id":"92780"}]}],"im_qq":"603284696,774773215,800037035,1876423030","im_ww":"qqsiou@126.com,13226676375","store_credit_image":"s_cap_1.gif","store_credit_value":"1188","store_praise_rate":96.35,"user_id":148086,"user_name":"molimoq","nickname":"\u4f60\u597d\u5440122\u7a0d\u7b49","is_nickname_edit":"1","email":"1322342345@qq.com","phone_mob":"17000335263","pe_credit":1,"pe_region":"","deal_times":"533","deal_amount":"1111332.45","email_not_verify":0,"phone_not_verify":0,"problem_not_verify":0,"passwd_power":"2","user_black_status":0,"has_store":"148086","s":{"148086_148086":{"privs":"all","store_name":"ACERF","is_watermark":"1","domain":"moq","user_id":"148086","store_id":"148086"}},"real_name":"eelly","add_goods_expire_time":0,"low_price_status":0,"low_price_margen":0,"entity_status":"2","open_status":"0","kefu_unique_id":"26a32d57c4b60cc3788b5ab238e4c6cf148086","last_login":"1501710370","last_ip":"172.18.107.254","manage_store":"148086","login_users_info_repeat_fronted":true,"base_show_window":4,"had_show_window":"0","left_show_window":4,"total_show_window":4,"last_month_sale_amount":0,"last_month_addition_show_window":0,"this_month_sale_amount":0,"this_month_addition_show_window":0,"portrait":"https:\/\/uc.eelly.test\/avatar.php?uid=148086&size=middle","myAccount":{"pm_id":"1","uid":"148086","user_name":"molimoq","money":"17,454.10","lastlogin":"0000-00-00 00:00:00","lastcharge":"2017-07-28 17:24:49","extract_rate":"0.000","lastdraw":"2017-07-28 17:24:56","enterprise_audite":"0","bank_subbranch":"\u767d\u4e91\u533a\u652f\u884c","pay_account":"dev@eelly.com","address":"none","pay_password":"e10adc3949ba59abbe56e057f20f883e","enterprise_audite_fail":"","cart_reversed_pic":"http:\/\/img.eelly.test\/G02\/M00\/00\/01\/ooYBAFRhvQmIJWhLAADiTksG44cAAAAeAFYNsQAAOJm757.jpg","frozenmoney":"13,225.81","wechat_purse_open_id":"oon0dtwBFJTDq5c06-oyL67NhBXo","lastupdatetime":"2017-07-28 17:24:56","phone_audite":"1","email_audite":"1","problem_audite":"1","name_audite":"1","encashmoney":"4,228.29","yesmoney":"4228.29"}}';

echo $str;exit;*/
/*echo 20*24*60*60;exit;
$lsIds = [1,2,3];
$level = 5;
$storeName = '商店';

//对数组进行格式化防止收到攻击
$lsIds = array_map('intval', $lsIds);
print_r($lsIds);
exit;

$data = [
    0 => ['name' => 'ok'],
    1 => ['name' => 'emx'],
    2 => ['name' => 'no'],
];

print_r(end($data));exit;

$str = '55772222!$466#';

$str = preg_replace('/[\s\S]/i','*',$str);
echo  $str;

exit();
$ids = 'uusus,ttt';

$ids = explode(',', $ids);
$ids = array_map('intval', $ids);
$ids = array_filter($ids);
print_r(count($ids));

exit;*/
$str = 'YTozOntzOjg6InN0b3JlX2lkIjtzOjc6IjEwMDM4MjgiO3M6NToic3RvcmUiO2E6ODc6e3M6ODoic3RvcmVfaWQiO3M6NzoiMTAwMzgyOCI7czoxMDoic3RvcmVfbmFtZSI7czoxMjoi5r2u5YyF5paw6K+tIjtzOjEwOiJvd25lcl9uYW1lIjtzOjEyOiLmva7ljIXmlrDor60iO3M6MzoidGVsIjtzOjExOiIxMzc5NDQ0MDk4MSI7czo2OiJkb21haW4iO3M6MTI6ImNoYW9iYW94aW55dSI7czo1OiJzdGF0ZSI7czoxOiIxIjtzOjk6Im9wZW5fdGltZSI7czoxMDoiMTM3MzM5NDcwMSI7czo4OiJhZGRfdGltZSI7czoxMDoiMTM3MTYyNjQ5OSI7czoxMzoiYWRkaXRpb25fZmxhZyI7czoxOiIwIjtzOjEwOiJzdG9yZV9sb2dvIjtzOjM0OiJkYXRhL3N5c3RlbS9kZWZhdWx0X3N0b3JlX2xvZ28uZ2lmIjtzOjExOiJzdG9yZV9waG90byI7czowOiIiO3M6NzoiZGVhbF9pbiI7czoxMjoi5aWz5YyF5om55Y+RIjtzOjY6ImlzX21peCI7czoxOiIxIjtzOjc6Im1peF9udW0iO3M6MToiMiI7czo5OiJtaXhfbW9uZXkiO3M6MzoiMTAwIjtzOjEwOiJyZWJ1eV9yYW5rIjtzOjU6IjEzLjMzIjtzOjEzOiJweV9zdG9yZV9uYW1lIjtzOjE6IkMiO3M6MTA6ImlzX3Byb21pc2UiO3M6MjoiMTQiO3M6MTU6ImNvbW1pc3Npb25fcmF0ZSI7czo1OiIwLjAwNSI7czoxMjoiaXNfd2F0ZXJtYXJrIjtzOjE6IjAiO3M6MTQ6Imxhc3R1cGRhdGV0aW1lIjtzOjE5OiIyMDE1LTEyLTA5IDE4OjAxOjI5IjtzOjY6Im1vYmlsZSI7czoxMToiMTM3OTQ0NDA5ODEiO3M6MTE6ImNyZWRpdF9tYXJrIjtzOjE6IjAiO3M6MTM6IndhdGVybWFya19zZXQiO3M6Mjg6IjEqKjAqKjcqKk1pY3Jvc29mdCBZYUhlaSoqMjAiO3M6MTE6InN0cmVldF9hZGRyIjtzOjY6IuW5v+W3niI7czoxODoiZGVmZW5kYW50X3N0b3JlX2lkIjtzOjE6IjAiO3M6NjoiaXNfYXBwIjtzOjE6IjAiO3M6MTA6ImlzX2ZlbnhpYW8iO3M6MToiMCI7czoxMjoiY3JlZGl0X3ZhbHVlIjtzOjI6Ijc2IjtzOjEyOiJhZGRlZF9jcmVkaXQiO3M6MToiMCI7czoxMToicHJhaXNlX3JhdGUiO2k6MTAwO3M6MTE6Imdvb2RzX2NvdW50IjtzOjI6IjgwIjtzOjEyOiJvcmRlcnNfY291bnQiO3M6MjoiOTIiO3M6MTA6ImFyYml0ZV9zdW0iO3M6MToiMCI7czoxMDoicGFja2V0X3VybCI7czowOiIiO3M6MTc6InN0YXRlX2V4cGlyZV90aW1lIjtzOjE6IjAiO3M6OToiaXNfbWFuYWdlIjtzOjE6IjAiO3M6ODoiZW5kX3RpbWUiO3M6MTA6IjE0MDQ4NDQzMDEiO3M6MjY6ImxpbWl0X2FjdGl2aXR5X2V4cGlyZV90aW1lIjtzOjE6IjAiO3M6MjI6ImhpZGVfc3RvcmVfZXhwaXJlX3RpbWUiO3M6MToiMCI7czoxMToicHJvdGVjdF9wd2QiO3M6MDoiIjtzOjg6InByb3BlcnR5IjthOjM6e3M6ODoic2piX3RpbWUiO2k6MTQwMjQzNjEwNTtzOjc6InNqYl91cmwiO3M6NTc6Imh0dHA6Ly9kb3duLmVlbGx5LmNvbS9zaGFyZS8wMDEvMDAzLzgyOC9jYnh5YWxsX2VlbGx5LnppcCI7czoxNToic2piX2dvb2RzX2NvdW50IjtpOjE7fXM6MTk6InNlbGZfbWFya2V0aW5nX3R5cGUiO3M6MToiMSI7czoxNDoic3RvcmVfa2V5d29yZHMiO3M6NDA6IuS4gOS7tuS7o+WPkSzlpbPljIUs55qu5YyFLOWls+ijhSzljIXljIUiO3M6MTc6InN0b3JlX2Rlc2NyaXB0aW9uIjtzOjI4ODoi5pys5YWs5Y+45Li76JCl5pe25bCa5aWz5YyF5om55Y+RLOmfqeeJiOWls+WMheaJueWPkSzlk4HniYzlpbPljIXmibnlj5Es5pe25bCa5YyF5YyF5om55Y+RLOetieWMheWMheaJueWPkSzkuLrljIXljIXlupfkuLvop6PlhrPljIXljIXmibnlj5HluILlnLrotKfmupAs5o+Q6auY5YyF5YyF5om55Y+R5biC5Zy66LSn5rqQ6LSo6YePLOWinuWKoOWMheWMheaJueWPkea4oOmBkyzpmY3kvY7mibnlj5HmiJDmnKws6L+Y5pSv5oyB5YyF5YyF572R5bqX5Luj55CG5LiO5bm/5bee5YyF5YyF5Yqg55uf572R44CCIjtzOjE0OiJzZWxsX3llc3RlcmRheSI7czoxOiIwIjtzOjEwOiJpc19uZXdfdHBsIjtpOjE7czoxNjoicHJlc2VudF9hZF9tb25leSI7czo0OiIwLjAwIjtzOjEzOiJkZXNpZ25fYWRfbnVtIjtzOjE6IjAiO3M6MTM6InRlbXBsYXRlX3R5cGUiO3M6MToiNCI7czoxNToiZXZhbF9nb29kc19pY29uIjtzOjM6IjBkMSI7czoxNzoiZXZhbF9zZXJ2aWNlX2ljb24iO3M6MzoiMGQxIjtzOjE4OiJldmFsX2ZlZWRiYWNrX2ljb24iO3M6MzoiMGQxIjtzOjEyOiJjcmVkaXRfaW1hZ2UiO3M6NzQ6Ii8vc3RhdGljLmVlbGx5LmNvbS90aGVtZXMvc3RvcmUvZGVmYXVsdC9zdHlsZXMvZGVmYXVsdC9pbWFnZXMvc19ibHVlXzIuZ2lmIjtzOjExOiJzdG9yZV9vd25lciI7YToxMzp7czo3OiJ1c2VyX2lkIjtzOjc6IjEwMDM4MjgiO3M6OToidXNlcl9uYW1lIjtzOjEyOiLmva7ljIXmlrDor60iO3M6NToiZW1haWwiO3M6MTc6IjE1MjQwNzA3MjRAcXEuY29tIjtzOjk6InJlYWxfbmFtZSI7czo2OiLlsI/pnZkiO3M6NjoiZ2VuZGVyIjtzOjE6IjAiO3M6NToiaW1fcXEiO3M6NToiMTIzNjQiO3M6OToicGhvbmVfdGVsIjtzOjA6IiI7czo4OiJiaXJ0aGRheSI7czoxOiIwIjtzOjk6InBob25lX21vYiI7czoxMToiMTM3OTQ0NDA5ODEiO3M6ODoibmlja25hbWUiO3M6MTI6Iua9ruWMheaWsOivrSI7czoxNjoiaXNfbmlja25hbWVfZWRpdCI7czoxOiIwIjtzOjY6InJlZ2lvbiI7czoxOiIwIjtzOjE0OiJsYXN0dXBkYXRldGltZSI7czoxOToiMjAxNS0wNy0xNSAxNDozMjowMSI7fXM6MTE6InJlZ2lvbl9uYW1lIjtzOjU1OiLlub/kuJznnIEg5bm/5bee5biCIOi2iuengOWMuiDkur/mo67nmq7lhbfln44gMeWxgiBBMDA3IjtzOjE2OiJyZWdpb25fbmFtZV9jaXR5IjtzOjE5OiLlub/kuJznnIEg5bm/5bee5biCIjtzOjEwOiJzdG9yZV9uYXZzIjtzOjA6IiI7czoxMjoic3RvcmVfZ2NhdGVzIjtzOjA6IiI7czoxMjoic3RvcmVfZGVncmVlIjtpOjQ7czoxNDoic3RvcmVfcXVhbnRpdHkiO2k6NDQ1O3M6MTE6Im9yZGVyX2NvdW50IjtpOjk1O3M6MTE6ImJ1eWVyX2NvdW50IjtpOjczO3M6MTU6ImV2YWx1YXRpb25fY291dCI7czowOiIiO3M6OToicmVhbF9zaG90IjtpOjA7czoxOToicmV0dXJuX2dvb2RzX3N0YXR1cyI7aTowO3M6ODoiYXV0aF9hbGwiO2E6NTp7czo5OiJpc19lbnRpdHkiO2k6MDtzOjEzOiJpc19lbnRlcnByaXNlIjtpOjA7czoxNjoiaXNfdGltZV9zaGlwcGluZyI7aTowO3M6MTI6ImlzX2ludGVncml0eSI7aTowO3M6MTE6ImlzX2JlaGFsZm9mIjtzOjE6IjAiO31zOjIzOiJpbnRlZ3JpdHlfc2VydmljZV9tb25leSI7aTowO3M6NzoidGVsX29yaSI7czoxMToiMTM3OTQ0NDA5ODEiO3M6MjA6InN0b3JlX2F1dGhlbnRpY2F0aW9uIjtpOjA7czoxOToiYXJlYV9hdXRoZW50aWNhdGlvbiI7aTowO3M6MTA6ImNyZWRpdF9iYXIiO3M6MDoiIjtzOjk6Imdvb2RfcmF0ZSI7czo2OiIxMDAuMDAiO3M6Njoiel9yYXRlIjtzOjQ6IjAuMDAiO3M6NjoiY19yYXRlIjtzOjQ6IjAuMDAiO3M6MTU6InByYWlzZV9yYXRlX2NvbSI7czo0NToiPHN0cm9uZyBzdHlsZT0iY29sb3I6cmVkOyI+6auYOjAuMjIlPC9zdHJvbmc+IjtzOjE5OiJwcmFpc2VfcmF0ZV9jb21fb3JnIjtzOjMyOiI8ZW0gY2xhc3M9ImNfcmVkIj7pq5g6MC4yMiU8L2VtPiI7czoxMDoiYXJiaXRlX2NvbSI7czo0OToiPHN0cm9uZyBzdHlsZT0iY29sb3I6IzZGOUEzRTsiPuS9jjowLjExJTwvc3Ryb25nPiI7czo4OiJzamJfYXV0aCI7aToxO3M6MTI6InJlZnVuZF9jb3VudCI7aTowO3M6MTE6ImFyYml0X2NvdW50IjtpOjA7czoxMjoicHVuaXNoX2NvdW50IjtpOjA7czo5OiJzdG9yZV9hZ2UiO3M6NDoiMuW5tCI7czoxMToiaGFzX25ld190cGwiO2I6MTtzOjQ6ImtlZnUiO2E6Mjp7aTowO2E6Njp7czo1OiJ0aXRsZSI7czoxMjoi5Zyo57q/5a6i5pyNIjtzOjY6IndvcmtfcyI7czoxOiI5IjtzOjY6IndvcmtfZSI7czoyOiIyMiI7czo1OiJwaG9uZSI7czoxMjoiIDE1OTkyNjk2ODM3IjtzOjU6InNrX2lkIjtzOjM6IjI0OSI7czoyOiJjcyI7YTozOntpOjA7YTo0OntzOjQ6InR5cGUiO3M6MToiMCI7czo1OiJ0aXRsZSI7czoxMzoi5r2u5YyFLeWwj+mdmSI7czo2OiJudW1iZXIiO3M6MTA6IjE1MjQwNzA3MjQiO3M6Njoic2tuX2lkIjtzOjM6IjYwOCI7fWk6MTthOjQ6e3M6NDoidHlwZSI7czoxOiIwIjtzOjU6InRpdGxlIjtzOjEzOiLmva7ljIUt5bCP57GzIjtzOjY6Im51bWJlciI7czoxMDoiMTM2MzU1Nzk5NCI7czo2OiJza25faWQiO3M6MzoiNjA5Ijt9aToyO2E6NDp7czo0OiJ0eXBlIjtzOjE6IjEiO3M6NToidGl0bGUiO3M6MTM6Iua9ruWMhS3lsI/mmI4iO3M6NjoibnVtYmVyIjtzOjEzOiJtaW5nX3NodV8wMTIxIjtzOjY6InNrbl9pZCI7czozOiI2MTAiO319fWk6MTthOjY6e3M6NToidGl0bGUiO3M6MTI6Iua9ruWMheaWsOivrSI7czo2OiJ3b3JrX3MiO3M6MToiOSI7czo2OiJ3b3JrX2UiO3M6MjoiMTgiO3M6NToicGhvbmUiO3M6MTI6IiAgMTU5OTI2OTY4MyI7czo1OiJza19pZCI7czo1OiIxNzQ2NSI7czoyOiJjcyI7YTozOntpOjA7YTo0OntzOjQ6InR5cGUiO3M6MToiMCI7czo1OiJ0aXRsZSI7czo5OiLlrqLmnI1RUTEiO3M6NjoibnVtYmVyIjtzOjEwOiIxMzYzNTU3OTk0IjtzOjY6InNrbl9pZCI7czo1OiIzMTU5OCI7fWk6MTthOjQ6e3M6NDoidHlwZSI7czoxOiIwIjtzOjU6InRpdGxlIjtzOjk6IuWuouacjVFRMiI7czo2OiJudW1iZXIiO3M6MTA6IjE1MjQwNzA3MjQiO3M6Njoic2tuX2lkIjtzOjU6IjMxNTk5Ijt9aToyO2E6NDp7czo0OiJ0eXBlIjtzOjE6IjEiO3M6NToidGl0bGUiO3M6MTM6IuWuouacjeaXuuaXujEiO3M6NjoibnVtYmVyIjtzOjEzOiJtaW5nX3NodV8wMTIxIjtzOjY6InNrbl9pZCI7czo1OiIzMTYwMCI7fX19fXM6NToiaW1fcXEiO3M6NDM6IjE1MjQwNzA3MjQsMTM2MzU1Nzk5NCwxMzYzNTU3OTk0LDE1MjQwNzA3MjQiO3M6NToiaW1fd3ciO3M6Mjc6Im1pbmdfc2h1XzAxMjEsbWluZ19zaHVfMDEyMSI7fXM6NToiZ29vZHMiO2E6NTp7aTowO2E6MTM6e3M6MTA6Imdvb2RzX25hbWUiO3M6MTA4OiLljoLlrrbnm7TplIAg5LiA5Lu25Luj5Y+R5aWz5byP5YyF5YyF5paw5qy+5r2u5aWz5YyF566A57qm5aSn54mM5pe25bCaT0zpo47no6jnoILnmq7lpI3lj6TmiYvmj5Dpk4Lph5HlpKfljIUiO3M6MTM6ImRlZmF1bHRfaW1hZ2UiO3M6NzA6IkcwMi9NMDAvMDAvMzMvc21hbGxfb29ZQkFGTFk2Rk9JSkJfRUFBUk85ckwzVWQwQUFBVUdnSE9wQ29BQkU4TzUyLmpwZWciO3M6NToicHJpY2UiO2E6Njp7czo4OiJnb29kc19pZCI7czo3OiIzODU5MTU2IjtzOjg6InN0b3JlX2lkIjtzOjc6IjEwMDM4MjgiO3M6MTA6InByaWNlX3R5cGUiO2k6MTtzOjExOiJwcmljZV9sb3dlciI7czo2OiIxMDIuMDAiO3M6MTE6InByaWNlX3VwcGVyIjtzOjY6IjEwOC4wMCI7czoxMDoicHJpY2VfZGF0YSI7YTozOntpOjA7YTozOntzOjExOiJsb3dlcl9saW1pdCI7czoxOiIxIjtzOjExOiJ1cHBlcl9saW1pdCI7czoxOiI5IjtzOjU6InByaWNlIjtzOjY6IjEwOC4wMCI7fWk6MTthOjM6e3M6MTE6Imxvd2VyX2xpbWl0IjtzOjI6IjEwIjtzOjExOiJ1cHBlcl9saW1pdCI7czoyOiIxOSI7czo1OiJwcmljZSI7czo2OiIxMDUuMDAiO31pOjI7YTozOntzOjExOiJsb3dlcl9saW1pdCI7czoyOiIyMCI7czoxMToidXBwZXJfbGltaXQiO3M6MToiMCI7czo1OiJwcmljZSI7czo2OiIxMDIuMDAiO319fXM6MTA6InBlcm1pc3Npb24iO3M6MDoiIjtzOjg6InN0b3JlX2lkIjtzOjc6IjEwMDM4MjgiO3M6OToicGFyaXR5X2lkIjtzOjE6IjAiO3M6NToic2FsZXMiO3M6MToiMCI7czo4OiJjb2xsZWN0cyI7czoxOiI1IjtzOjU6InZpZXdzIjtzOjM6IjE5NCI7czo5OiJpcF9udW1fMzAiO3M6MzoiMTk3IjtzOjg6Imdvb2RzX2lkIjtzOjc6IjM4NTkxNTYiO3M6NzoicGljdHVyZSI7YTo1OntpOjA7czo2NDoiRzAyL00wMC8wMC8zMy9vb1lCQUZMWTZGT0lKQl9FQUFSTzlyTDNVZDBBQUFVR2dIT3BDb0FCRThPNTIuanBlZyI7aToxO3M6NjQ6IkcwMy9NMDAvMDAvMzgvcDRZQkFGTFk2RmVJUE1xZ0FBVFFRYmpsRDJNQUFBV0pBRG4yMUVBQk5CWjc5LmpwZWciO2k6MjtzOjY0OiJHMDEvTTAwLzAwLzNBL29ZWUJBRkxZNkZlSUNzRTdBQVRfSnptaVJnZ0FBQVcxd0MyNVlNQUJQOF8xNy5qcGVnIjtpOjM7czo2NDoiRzAyL00wMC8wMC8zMy9vb1lCQUZMWTZGZUlmQ0pkQUFSQlJHNVhGTk1BQUFVR2dJelRJb0FCRUZjNDEuanBlZyI7aTo0O3M6NjQ6IkcwMy9NMDAvMDAvMzgvcDRZQkFGTFk2RmVJZlBpT0FBUjdCV0I3S1FzQUFBV0pBRHRzcHdBQkhzZDcwLmpwZWciO31zOjE0OiJleGFtaW5lQ29udGVudCI7YToxOntzOjc6InBpY3R1cmUiO3M6MDoiIjt9fWk6MTthOjEzOntzOjEwOiJnb29kc19uYW1lIjtzOjgyOiIyMDE05aSP5a2j6Z+p54mI5aWz5YyF5LyR6Zey5aSN5Y+k5r2u5rWB5qyn576O6YKu5beu5YyF5pe25bCa5Y2V6IKp5pac5oyO5bCP5YyF5YyFIjtzOjEzOiJkZWZhdWx0X2ltYWdlIjtzOjcwOiJHMDMvTTAwLzAwLzVDL3NtYWxsX3A0WUJBRk50eWRXSVNaQ2dBQWNoOUFTdUk3UUFBQWtEUVBOZjRzQUJ5SU03NTUucG5nIjtzOjU6InByaWNlIjthOjY6e3M6ODoiZ29vZHNfaWQiO3M6NzoiNDMwOTI5NCI7czo4OiJzdG9yZV9pZCI7czo3OiIxMDAzODI4IjtzOjEwOiJwcmljZV90eXBlIjtpOjE7czoxMToicHJpY2VfbG93ZXIiO3M6NToiNDIuMDAiO3M6MTE6InByaWNlX3VwcGVyIjtzOjU6IjQ3LjAwIjtzOjEwOiJwcmljZV9kYXRhIjthOjM6e2k6MDthOjM6e3M6MTE6Imxvd2VyX2xpbWl0IjtzOjE6IjEiO3M6MTE6InVwcGVyX2xpbWl0IjtzOjE6IjkiO3M6NToicHJpY2UiO3M6NToiNDcuMDAiO31pOjE7YTozOntzOjExOiJsb3dlcl9saW1pdCI7czoyOiIxMCI7czoxMToidXBwZXJfbGltaXQiO3M6MjoiMTkiO3M6NToicHJpY2UiO3M6NToiNDUuMDAiO31pOjI7YTozOntzOjExOiJsb3dlcl9saW1pdCI7czoyOiIyMCI7czoxMToidXBwZXJfbGltaXQiO3M6MToiMCI7czo1OiJwcmljZSI7czo1OiI0Mi4wMCI7fX19czoxMDoicGVybWlzc2lvbiI7czowOiIiO3M6ODoic3RvcmVfaWQiO3M6NzoiMTAwMzgyOCI7czo5OiJwYXJpdHlfaWQiO3M6MToiMCI7czo1OiJzYWxlcyI7czoxOiIwIjtzOjg6ImNvbGxlY3RzIjtzOjE6IjEiO3M6NToidmlld3MiO3M6MzoiMTk2IjtzOjk6ImlwX251bV8zMCI7czozOiIxMzIiO3M6ODoiZ29vZHNfaWQiO3M6NzoiNDMwOTI5NCI7czo3OiJwaWN0dXJlIjthOjM6e2k6MDtzOjY0OiJHMDMvTTAwLzAwLzVDL3A0WUJBRk50eWRXSVNaQ2dBQWNoOUFTdUk3UUFBQWtEUVBOZjRzQUJ5SU03NTUucG5nIjtpOjE7czo2NDoiRzAzL00wMC8wMC81Qy9wWVlCQUZOdHlkV0lGOFFTQUFYazNWb3hibk1BQUFrRFFQVW9aY0FCZVQxNDUwLnBuZyI7aToyO3M6NjQ6IkcwMi9NMDAvMDAvNDUvb29ZQkFGTnR5ZFdJTnZBdEFBWFNDUWt3Z1A0QUFBYkN3T1VIblFBQmRJaDExMC5wbmciO31zOjE0OiJleGFtaW5lQ29udGVudCI7YToxOntzOjc6InBpY3R1cmUiO3M6MDoiIjt9fWk6MjthOjEzOntzOjEwOiJnb29kc19uYW1lIjtzOjEwMToi5Y6C5a6255u06ZSAIOS4gOS7tuS7o+WPkeWls+WGrOWto+aWsOasvuWls+WMheasp+e+juaXtuWwmuaJi+aPkOWMhSDpq5jmoaPkvJHpl7Loj7HmoLzljZXogqnmlpzmjI7ljIUiO3M6MTM6ImRlZmF1bHRfaW1hZ2UiO3M6NzA6IkcwMi9NMDAvMDAvMzUvc21hbGxfb29ZQkFGTFpFR2lJQ0xmM0FBREhGUmJKTlVZQUFBVV9BUGJHejhBQU1jdDU1LmpwZWciO3M6NToicHJpY2UiO2E6Njp7czo4OiJnb29kc19pZCI7czo3OiIzOTQzMjI1IjtzOjg6InN0b3JlX2lkIjtzOjc6IjEwMDM4MjgiO3M6MTA6InByaWNlX3R5cGUiO2k6MTtzOjExOiJwcmljZV9sb3dlciI7czo1OiI4My4wMCI7czoxMToicHJpY2VfdXBwZXIiO3M6NToiODguMDAiO3M6MTA6InByaWNlX2RhdGEiO2E6Mzp7aTowO2E6Mzp7czoxMToibG93ZXJfbGltaXQiO3M6MToiMSI7czoxMToidXBwZXJfbGltaXQiO3M6MjoiMTkiO3M6NToicHJpY2UiO3M6NToiODguMDAiO31pOjE7YTozOntzOjExOiJsb3dlcl9saW1pdCI7czoyOiIyMCI7czoxMToidXBwZXJfbGltaXQiO3M6MjoiOTkiO3M6NToicHJpY2UiO3M6NToiODUuMDAiO31pOjI7YTozOntzOjExOiJsb3dlcl9saW1pdCI7czozOiIxMDAiO3M6MTE6InVwcGVyX2xpbWl0IjtzOjE6IjAiO3M6NToicHJpY2UiO3M6NToiODMuMDAiO319fXM6MTA6InBlcm1pc3Npb24iO3M6MDoiIjtzOjg6InN0b3JlX2lkIjtzOjc6IjEwMDM4MjgiO3M6OToicGFyaXR5X2lkIjtzOjE6IjAiO3M6NToic2FsZXMiO3M6MjoiMTMiO3M6ODoiY29sbGVjdHMiO3M6MToiMiI7czo1OiJ2aWV3cyI7czo0OiIxMjE1IjtzOjk6ImlwX251bV8zMCI7czoyOiI4NiI7czo4OiJnb29kc19pZCI7czo3OiIzOTQzMjI1IjtzOjc6InBpY3R1cmUiO2E6NTp7aTowO3M6NjQ6IkcwMi9NMDAvMDAvMzUvb29ZQkFGTFpFR2lJQ0xmM0FBREhGUmJKTlVZQUFBVV9BUGJHejhBQU1jdDU1LmpwZWciO2k6MTtzOjY0OiJHMDIvTTAwLzAwLzM1L29vWUJBRkxaRUdpSVFYcnBBQUhYTEo3cG9VTUFBQVVfQVBmNVdJQUFkZEUxNS5qcGVnIjtpOjI7czo2NDoiRzAyL00wMC8wMC8zNS9vb1lCQUZMWkVHcUlNM0ZXQUFIZ0hnTVRhX2NBQUFVX0FQNWtmb0FBZUEyNzcuanBlZyI7aTozO3M6NjQ6IkcwMS9NMDAvMDAvM0MvbzRZQkFGTFpFR21JT050T0FBSWUtNUxqU2dVQUFBWHV3RjVSODRBQWg4VDM1LmpwZWciO2k6NDtzOjY0OiJHMDEvTTAwLzAwLzNDL280WUJBRkxaRUdtSUt1TmxBQUdtRFI2N0xsUUFBQVh1d0dJNDhNQUFhWWw0Mi5qcGVnIjt9czoxNDoiZXhhbWluZUNvbnRlbnQiO2E6MTp7czo3OiJwaWN0dXJlIjtzOjA6IiI7fX1pOjM7YToxMzp7czoxMDoiZ29vZHNfbmFtZSI7czo4Mjoi5LiA5Lu25Luj5Y+R5YyF5YyFMjAxM+aWsOasvuWls+Wjq+WMhemfqeeJiOaXtuWwmuiPseagvOaJi+aPkOWMheS8kemXsumTvuadoeWNleiCqSI7czoxMzoiZGVmYXVsdF9pbWFnZSI7czo3MDoiRzAzL00wMC8wMC8zRC9zbWFsbF9wWVlCQUZMWkVIYUlOMFAwQUFCNWEydjZMWEVBQUFYNlFPX1F4d0FBSG1ENTAuanBlZyI7czo1OiJwcmljZSI7YTo2OntzOjg6Imdvb2RzX2lkIjtzOjc6IjM5NDMyMTciO3M6ODoic3RvcmVfaWQiO3M6NzoiMTAwMzgyOCI7czoxMDoicHJpY2VfdHlwZSI7aToxO3M6MTE6InByaWNlX2xvd2VyIjtzOjY6IjEwNS4wMCI7czoxMToicHJpY2VfdXBwZXIiO3M6NjoiMTEwLjAwIjtzOjEwOiJwcmljZV9kYXRhIjthOjM6e2k6MDthOjM6e3M6MTE6Imxvd2VyX2xpbWl0IjtzOjE6IjEiO3M6MTE6InVwcGVyX2xpbWl0IjtzOjE6IjkiO3M6NToicHJpY2UiO3M6NjoiMTEwLjAwIjt9aToxO2E6Mzp7czoxMToibG93ZXJfbGltaXQiO3M6MjoiMTAiO3M6MTE6InVwcGVyX2xpbWl0IjtzOjI6IjE5IjtzOjU6InByaWNlIjtzOjY6IjEwOC4wMCI7fWk6MjthOjM6e3M6MTE6Imxvd2VyX2xpbWl0IjtzOjI6IjIwIjtzOjExOiJ1cHBlcl9saW1pdCI7czoxOiIwIjtzOjU6InByaWNlIjtzOjY6IjEwNS4wMCI7fX19czoxMDoicGVybWlzc2lvbiI7czowOiIiO3M6ODoic3RvcmVfaWQiO3M6NzoiMTAwMzgyOCI7czo5OiJwYXJpdHlfaWQiO3M6MToiMCI7czo1OiJzYWxlcyI7czoxOiIwIjtzOjg6ImNvbGxlY3RzIjtzOjE6IjEiO3M6NToidmlld3MiO3M6MzoiMTgwIjtzOjk6ImlwX251bV8zMCI7czoyOiI4MCI7czo4OiJnb29kc19pZCI7czo3OiIzOTQzMjE3IjtzOjc6InBpY3R1cmUiO2E6Mzp7aTowO3M6NjQ6IkcwMy9NMDAvMDAvM0QvcFlZQkFGTFpFSGFJTjBQMEFBQjVhMnY2TFhFQUFBWDZRT19ReHdBQUhtRDUwLmpwZWciO2k6MTtzOjY0OiJHMDEvTTAwLzAwLzNDL280WUJBRkxaRUhhSWZlczNBQUJsbEU5YTBtQUFBQVh1d0tKSGJzQUFHV3M0Mi5qcGVnIjtpOjI7czo2NDoiRzAzL00wMC8wMC8zRC9wWVlCQUZMWkVIZUlMQmVRQUFDS1VhS3hYWDhBQUFYNlFQV210b0FBSXBwNDUuanBlZyI7fXM6MTQ6ImV4YW1pbmVDb250ZW50IjthOjE6e3M6NzoicGljdHVyZSI7czowOiIiO319aTo0O2E6MTM6e3M6MTA6Imdvb2RzX25hbWUiO3M6MTA2OiLljoLlrrbnm7TplIAg5LiA5Lu25Luj5Y+R6Z+p54mI5paw5qy+5aWz5YyF5r2u6LG557q56ams5q+b5omL5YyF5YyF5omL5ou/5YyF5pma5a605YyF5aWz5L+h5bCB5YyF5omL5oqT5YyFIjtzOjEzOiJkZWZhdWx0X2ltYWdlIjtzOjcwOiJHMDMvTTAwLzAwLzMwL3NtYWxsX3BZWUJBRkxZbC15SU1xZElBQUJfOTRDR2ZCWUFBQVMyZ0xqUW0wQUFJQVA2OC5qcGVnIjtzOjU6InByaWNlIjthOjY6e3M6ODoiZ29vZHNfaWQiO3M6NzoiMzY4Nzg5NCI7czo4OiJzdG9yZV9pZCI7czo3OiIxMDAzODI4IjtzOjEwOiJwcmljZV90eXBlIjtpOjE7czoxMToicHJpY2VfbG93ZXIiO3M6NToiMzUuMDAiO3M6MTE6InByaWNlX3VwcGVyIjtzOjU6IjQwLjAwIjtzOjEwOiJwcmljZV9kYXRhIjthOjM6e2k6MDthOjM6e3M6MTE6Imxvd2VyX2xpbWl0IjtzOjE6IjEiO3M6MTE6InVwcGVyX2xpbWl0IjtzOjE6IjkiO3M6NToicHJpY2UiO3M6NToiNDAuMDAiO31pOjE7YTozOntzOjExOiJsb3dlcl9saW1pdCI7czoyOiIxMCI7czoxMToidXBwZXJfbGltaXQiO3M6MjoiMTkiO3M6NToicHJpY2UiO3M6NToiMzcuMDAiO31pOjI7YTozOntzOjExOiJsb3dlcl9saW1pdCI7czoyOiIyMCI7czoxMToidXBwZXJfbGltaXQiO3M6MToiMCI7czo1OiJwcmljZSI7czo1OiIzNS4wMCI7fX19czoxMDoicGVybWlzc2lvbiI7czowOiIiO3M6ODoic3RvcmVfaWQiO3M6NzoiMTAwMzgyOCI7czo5OiJwYXJpdHlfaWQiO3M6MToiMCI7czo1OiJzYWxlcyI7czoxOiIwIjtzOjg6ImNvbGxlY3RzIjtzOjE6IjUiO3M6NToidmlld3MiO3M6MzoiMjc0IjtzOjk6ImlwX251bV8zMCI7czoyOiI3NSI7czo4OiJnb29kc19pZCI7czo3OiIzNjg3ODk0IjtzOjc6InBpY3R1cmUiO2E6MTp7aTowO3M6NjQ6IkcwMy9NMDAvMDAvMzAvcFlZQkFGTFlsLXlJTXFkSUFBQl85NENHZkJZQUFBUzJnTGpRbTBBQUlBUDY4LmpwZWciO31zOjE0OiJleGFtaW5lQ29udGVudCI7YToxOntzOjc6InBpY3R1cmUiO3M6MDoiIjt9fX19';

$content = base64_decode($str,false);
$content = unserialize($content);
echo json_encode($content,true);exit;
if(!empty($content)){
    $contents = "<p>{$content['store']['store_description']}</p><br/>";
    $contents .= "公司名：".$content['store']['store_name'];
    $contents .= "<br/>";
    $contents .= "地　址: ".$content['store']['region_name'];
    echo $contents;
}



exit;
$license = 'usuu182319880707765x';
if (!preg_match('/^[0-9a-zA-Z]*$/i', $license)){
    throw new LogicException('请正确填写身份证号码', StatusCode::NOT_EMPTY);
}

exit("ok");
echo "ok";

exit;
phpinfo();exit;
header("content-type:text/html;charset=utf-8");
$str = "小明是小明";

echo ltrim($str,"小明");

exit;
$res['auditTime'] = 28801;
$res['auditTime'] -=28800;

echo $res['auditTime'];exit;

$date=date("Y-m-d", time());;
echo get_week($date);

exit;
$weekarray=array("日","一","二","三","四","五","六"); //先定义一个数组
echo "星期".$weekarray[date("w")];
$date_value = date("Y-m-d", time());
echo  "星期".$weekarray[date("w",$date_value)];
echo $date_value;
exit;
$license = '44512119920822511X';

if (!preg_match('/^(\d{15}|\d{17}[\dx])$/i', $license)){
    echo "ykksk";
}
exit;

$info['created_time'] = 0;
echo strtotime('+1 year', $info['created_time']);
exit;
$add_time = time();
$expire_time = strtotime('+1 year', $add_time);
echo $expire_time;exit;
function removeHostForImg($imgUrl)
{
      $imgUrl = trim($imgUrl);
      if (strlen($imgUrl) <1) {
          return '';
      }
      $imgArr = parse_url($imgUrl);
      //if(isset($imgArr['host']) && $imgArr['host']>1){
          $imgUrl = str_replace(array($imgArr['scheme'],$imgArr['host']), '', $imgUrl);
      //}
      return $imgUrl;
}
$str = array('https://www.eelly.test/index.php?app=market_vendor&act=brandAuth');

$str = array_map("removeHostForImg",$str);
print_r($str);



exit;

require_once ('guzzlephp/src/Client.php');
$client = new \GuzzleHttp\Client();

$res = $client->request('GET','https://www.baidu.com');
echo $res->getStatusCode();




exit();
$content = "测试内容&nbsp;sjsjjsjsjsjsj&nbsp;";
$content = str_replace('&nbsp;', '', $content);

print_r($content);exit;

exit;
echo time();exit;
$str = 'G04/M00/00/C1/qIYBAFku6b6IX09DAA-hI_-5QiMAABLbgMox50AD6E75424882';
$fileInfo = explode('/', $str, 2);
print_r($fileInfo);exit;


$str = '【莫琼小店】 2017新款 




连衣裙  包邮 ';
echo $str;exit;
echo str_replace(PHP_EOL, '', $str);
exit;

$str = "内容信息！";

$str = iconv('utf-8', 'gbk//IGNORE', $str);


echo $str;

exit();
$test = '5';

if($test == 5){
    echo "ok 5";
    if(!isset($a)){
        echo "is not exist !";
    }else{
        echo "ues";
    }
}else{
    echo "wo kao";
}

exit();
$stt = 'eJyFU02PmzAQ/S8+RxWQkIQ9Nu2hUruqlK16SKrI2BNircGsbRLRiP/eGZvssh9SOSBm5j3P4834yipjpPsm2V0yY77V9MWWac5mTHAPIcyKgsLObcbM7s8s8u55DQhgt7CrS7AxcQFVnXw4trWmZXdX5kCD8CA3RhtE7dgcH4Tmed8zPPJW36q/QOV9l68Wq323Wicp1c8c5bnYHtV4Uz+ftO/WCymRAEWO39kqw3P33VIuSgxLicliXYhpKS+Td8l8nr9FvtEY+74oXCbHeXxT1Vsu4Qe3j9EDdXzgVbBAua03FjaR3YL4qiSakw7kjhJA9jx1xsND30JgOG79565HS0PYdPXPCNxdbxSW5Z+SBPtocwH7XdXKU99hNkEs/ouYf4igcaBM0oW2FOsM38sjjLaQCBG9/6iM3GDQ6wli1htB1qRJEnreNGC7YaBf1sEIp5qK619NkBJ4WHg2puRenGgJkCHBc6UdkVRdjatxVhLMZEm/gBNWtV6ZhoByGtKUHqH/beLIggrwHgUQtAVbK+dGonKHaQKlcK0PcSFo6zGh4Qw6tvY0+SDSgjB1DY0EvDopbcX2ZC7jr1248geH8cErukvJMPwDDsccvg==';
var_dump(json_decode(gzuncompress(base64_decode($stt)), true));exit;

phpinfo();exit;
$code = 200;
$msg = '';
if ($code == 200) {
    $msg = 'success';
} elseif ($code == 0) {
    $msg = "error";
} else {
    $msg = "未知";
}
echo $msg;
exit;
$condition = ['detailType' =>1];
$condition['detailType'] == 1 && $condition['needHour'] = $condition['totalSta'] = 1; #按小时分组;
print_r($condition);
exit;
$res = [
    1.0, 0.3, 9, 0.4, 1.3
];

function parentInt($key)
{
    return (int)$key + 1;
}
array_walk($res, 'parentInt');
print_r($res);
exit;
$res = array_map('parentInt', $res);
print_r($res);

exit();
$userAuditeStatus['name_audite'] = 1;

$userInfo['pay_password'] = 2;


if (($userAuditeStatus['name_audite'] != 1 && $userAuditeStatus['name_audite'] != 8) || empty($userInfo['pay_password'])) {
    exit("哈哈");
}

echo "skskks";
exit;

class A
{
    private $x = 1;
}

// Pre PHP 7 code
$getXCB = function () {
    return $this->x;
};
$getX = $getXCB->bindTo(new A, 'A'); // intermediate closure
echo $getX();

// PHP 7+ code
$getX = function () {
    return $this->x;
};
echo $getX->call(new A);

exit;
phpinfo();


exit();
$gen = (function () {
    yield 1;
    yield 2;

    return 3;
})();

foreach ($gen as $val) {
    echo $val, PHP_EOL;
}

echo $gen->getReturn(), PHP_EOL;


exit;

exit();
echo "\u{aa}";
echo "\u{0000aa}";
echo "\u{9999}";

exit();
$a = $a ?? 'ss';

echo $a;
exit;

exit();
echo testtxx(1.2444);

function testtxx(int $a): int
{
    return $a;
}


exit();
$version = '';
$method = 'xx';
!empty($version) && $method = $method . $version;

exit($method);
exit;
$user = '';


$start_time = microtime(true);

for ($i = 0; $i <= 10000; $i++) {
    if (empty($user)) {
        $user = [];
    }
}
$end_time = microtime(true);

echo $end_time - $start_time . "\r\n";


$start_time = microtime(true);

for ($i = 0; $i <= 100000; $i++) {
    if (!is_array($user)) {
        $user = [];
    }
}
$end_time = microtime(true);

echo $end_time - $start_time . "\r\n";

#echo $start_time;


exit;
phpinfo();
exit;
$str = '';

echo trim($str);

exit();
$emial = '2284876299@qq.com';
$file = '/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/';

if (preg_match($file, $emial, $macth)) {
    echo "skskks";
} else {
    echo "no";
}

print_r($macth);

exit();
$user = [
    'username' => 'tesxxt',
    'email' => '2284876299@qq.com',
    'sex' => 1
];

function addfh($val)
{
    return "'" . $val . "'";
}

$valuess = array_map('addfh', array_values($user));


print_r(implode(',', $valuess));

exit;

/*$conn = mysql_connect('localhost','root', '123456');
var_dump($conn);
echo "xiaojunming";
phpinfo();
exit();*/

/*$serv = new swoole_server("0.0.0.0", 9501);
$serv->on('connect', function ($serv, $fd){
    echo "Client:Connect.\n";
});
$serv->on('receive', function ($serv, $fd, $from_id, $data) {
    $serv->send($fd, 'Swoole: '.$data);
});
$serv->on('close', function ($serv, $fd) {
    echo "Client: Close.\n";
});
$serv->start();*/


include_once('Server.php');
$server = new Server();
