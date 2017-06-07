<?php

$code = 200;
$msg = '';
if ($code == 200) {
    $msg = 'success';
} elseif ($code == 0) {
    $msg = "error";
} else {
    $msg = "未知";
}

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
