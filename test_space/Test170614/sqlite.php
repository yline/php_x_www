<?php

// 当前主流的数据库有MsSQL，MySQL，Sybase，Db2，Oracle，PostgreSQL，Access等，这些数据库PHP都能够安装扩展来支持
// 一般情况下常说的LAMP架构指的是：Linux、Apache、Mysql、PHP

// 检测:是否连接
if (function_exists('mysql_connect'))
{
    echo 'Mysql扩展已经安装';
}else {
    echo "null";
}

$link = mysql_connect('127.0.0.1', 'code1', '') or die('数据库连接失败');
mysql_select_db('code1');
mysql_query("set names 'utf8'");
$result = mysql_query('select * from user limit 1');
$row = mysql_fetch_assoc($result);
print_r($row);
?>