<?php
require_once 'BaseCodeJson.php';

$arr = array(
    'id' => 1,
    'name' => 'yline'
);

Response::json(0, "成功", $arr);
