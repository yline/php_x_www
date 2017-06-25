<?php

/**
 * 1,组装字符串
 * 2,DomDocument
 * 3,XMLWriter
 * 4,SimpleXml
 */
require_once 'BaseCodeXml.php';

header("Content-Type:text/xml"); // 让网页直接展示xml格式,而不仅仅是内容
/* echo Response::xml(); // 字符串拼接 */

$arr = array(
    'id' => 1,
    'name' => 'yline'
);

$message = isset($_GET['format']) ? $_GET['format'] : "未上传数据"; // 客户端上传的数据

echo Response::xmlEncode(0, $message, $arr); // 通过封装
 
