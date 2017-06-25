<?php

class Response
{

    /**
     * 按Json方式输出通信数据
     *
     * @param number $code
     *            状态吗
     * @param string $message
     *            提示信息
     * @param array $data
     *            数据
     */
    public static function json($code = 0, $message = '', $data = array())
    {
        if (! is_numeric($code))
        {
            return '';
        }
        
        // 返回数据
        $result = array(
            'code' => $code,
            'message' => $message,
            'data' => $data
        );
        
        echo json_encode($result);
        exit();
    }
}

