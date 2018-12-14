<?php

class File
{

    const TXT = '.txt';

    private $dirFile;

    public function __construct()
    {
        $this->dirFile = dirname(__FILE__) . '/files/';
    }

    public function cacheData($filename, $value = '', $path = '')
    {
        $filePath = $this->dirFile . $path . $filename . self::TXT;
        
        if ('' !== $value)
        {
            // write in
            $fileDirPath = dirname($filePath);
            if (! is_dir($fileDirPath))
            {
                mkdir($fileDirPath, 0777);
            }
            
            return file_put_contents($fileDirPath, $value);
        }
    }
}