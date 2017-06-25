<?php

// Cookie是存储在客户端浏览器中的数据，我们通过Cookie来跟踪与存储用户数据。
setcookie('test', time());

ob_start();
print_r($_COOKIE);
$content = ob_get_contents();
$content = str_replace(" ", '&nbsp;', $content);
ob_clean();

header("content-type:text/html; charset=utf-8");
echo '当前的Cookie为：<br>';
echo nl2br($content);
?>