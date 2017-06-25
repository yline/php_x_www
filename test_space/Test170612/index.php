<?php
echo $m1 = memory_get_usage();

echo "\n";

$var_string = "123";
echo $m2 = memory_get_usage() - $m1;
echo "\n";

$n = 123;
echo $m3 = memory_get_usage() - $m1 - $m2;
echo "\n";

$f = 124.00;
echo $m4 = memory_get_usage() - $m1 - $m2 - $m3;
echo "\n";

$var_array = array(
    "125"
);
echo $m5 = memory_get_usage() - $m1 - $m2 - $m3 - $m4;

echo "\n";

date_default_timezone_set('Asia/ShangHai');
$today = date('m-d', time()); // 获取当天日期
$birthday = "02-14"; // 生日
$money = 238; // 消费金额
$discount = 0.8; // 八折优惠

if ($today == $birthday)
{
    $money = $money * $discount;
} else
{
    $money = $money * 1;
}

echo $money;
?>