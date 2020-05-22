<?php
/*================================================================
*   Copyright (C) 2020 Freeman  Ltd. All rights reserved.
*   
*   文件名称：demo.php
*   创 建 者：Eno2050
*   创建日期：2020年05月20日
*   描    述：
*
================================================================*/
namespace eno2050;
require_once './vendor/autoload.php';
use Eno2050\Phptools\StringTools;
use Eno2050\Phptools\ArrayTools;

// $singleStr = StringTools::getInstance();

// echo $singleStr->sayHello();
// 

// pack函数用于将其它进制的数字压缩到位字符串之中。也就是把其它进制数字转化为ASCII码字符串。
// $bin = pack('h', 0x5);

// echo "输出bin：" . ord($bin) . "\n";
// echo "输出：" . $bin . "\n";

//echo ord(0); // 48
//echo ord(0x5); // 53 转化成10进制5 => 然后转换成字符串5 => 53
//echo ord(0x41); // 0x41 => 65 => 转化成字符串65 => 首个字符也就是6 =>54
// echo ord('s') . "\n"; // 115
// echo ord('sing')."\n"; // 115
// $str = 'single';

// for ($i=0; $i < strlen($str); $i++) {
// 	echo ord($str[$i]). "=>"; 
// }
// 115=>105=>110=>103=>108=>101=>

// $bin = pack("a", "d");
// echo "output: " . $bin . "\n";
// echo "output: 0x" . bin2hex($bin) . "\n";
// 
$arr = array(
	'apple' => 100,
	'orange' => 1000,
);

var_dump(ArrayTools::getInstance()->changeKeyCase($arr, true));


