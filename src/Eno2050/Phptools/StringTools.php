<?php
/*================================================================
 *   Copyright (C) 2020 Freeman  Ltd. All rights reserved.
 *
 *   文件名称：StringTools.php
 *   创 建 者：Eno2050
 *   创建日期：2020年05月20日
 *   描    述：
 *
================================================================*/

namespace Eno2050\Phptools;

use Eno2050\Phptools\Traits\Singleton;

class StringTools
{
    use Singleton;
    /**
     * 过滤中文标点符号
     * @param  String $keyword 要过滤的字符串
     * @return String 过滤好的字符串
     */
    public function filterPunctuation($keyword)
    {
        $keyword = urlencode($keyword); //将关键字编码
        $keyword = preg_replace("/(%7E|%60|%21|%40|%23|%24|%25|%5E|%26|%27|%2A|%28|%29|%2B|%7C|%5C|%3D|\-|_|%5B|%5D|%7D|%7B|%3B|%22|%3A|%3F|%3E|%3C|%2C|\.|%2F|%A3%BF|%A1%B7|%A1%B6|%A1%A2|%A1%A3|%A3%AC|%7D|%A1%B0|%A3%BA|%A3%BB|%A1%AE|%A1%AF|%A1%B1|%A3%FC|%A3%BD|%A1%AA|%A3%A9|%A3%A8|%A1%AD|%A3%A4|%A1%A4|%A3%A1|%E3%80%82|%EF%BC%81|%EF%BC%8C|%EF%BC%9B|%EF%BC%9F|%EF%BC%9A|%E3%80%81|%E2%80%A6%E2%80%A6|%E2%80%9D|%E2%80%9C|%E2%80%98|%E2%80%99)+/", '', $keyword);
        $keyword = urldecode($keyword); //将过滤后的关键字解码
        return $keyword;
    }
    /**
     * 计算中文字符串长度	
     * @param  String $string 要计算的字符串
     * @return Number
     */
    public function count_strlen($string)
    {
    	// 第一步 判断字符串中文编码的类型
        $fileType = mb_detect_encoding($string, array('UTF-8', 'GBK', 'LATIN1', 'BIG5')); 
        // 第二部 根据字符编码计算字符串长度
        $length = iconv_strlen($string, $fileType); 
        return $length;
    }

}
