<?php

// 常见结构; return 在 finally执行完成才执行
try
{
    echo "try" . "\n";
    throw new Exception('wrong');
    // return;
} catch (Exception $ex)
{
    echo "catch" . "\n";
    $msg = 'Error:' . $ex->getMessage() . "\n";
    $msg .= $ex->getTraceAsString() . "\n";
    $msg .= '异常行号：' . $ex->getLine() . "\n";
    $msg .= '所在文件：' . $ex->getFile() . "\n";
    
    echo $msg;
} finally {
    echo "finally" . "\n";
}

?>