<?php

class Response
{

    public static function xml()
    {
        $xml = "<?xml version='1.0' encoding='UTF-8'?>\n";
        $xml .= "<root>\n";
        $xml .= "<code>200</code>\n";
        $xml .= "<message>数据返回成功</message>\n";
        
        $xml .= "<data>\n";
        $xml .= "<id>200</id>\n";
        $xml .= "<name>yline</name>\n";
        $xml .= "</data>\n";
        
        $xml .= "</root>";
        
        return $xml;
    }

    /**
     *
     * @param number $code            
     * @param string $message            
     * @param array $data
     *            array不能为数字
     * @return string
     */
    public static function xmlEncode($code = 0, $message = '', $data = array())
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
        
        $xml = "<?xml version='1.0' encoding='UTF-8'?>\n";
        $xml .= "<root>\n";
        
        $xml .= self::xmlToEncode($result);
        
        $xml .= "</root>";
        
        return $xml;
    }

    /**
     *
     * @param unknown $data
     *            数组不能为数字，否则出错
     * @return string
     */
    public static function xmlToEncode($data)
    {
        $tempXml = "";
        foreach ($data as $key => $value)
        {
            $tempXml .= "<{$key}>";
            
            if (is_array($value))
            {
                $tempXml .= self::xmlToEncode($value);
            } else
            {
                $tempXml .= $value;
            }
            
            $tempXml .= "</{$key}>\n";
        }
        return $tempXml;
    }
}

















