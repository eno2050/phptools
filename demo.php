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
	'orange' => 100,
	'pear'   => 100,
	'banner' => 2000,
	'watermelon' => 5000,
	'peach'    => 3000,
	'durian'   => 4000,
);

$fruits = array('apple', 'orange', 'pear', 'banner', 'watermelon', 'peach', 'durian');

$user = array(
  array(
    'id' => 5698,
    'first_name' => 'Bill',
    'last_name' => 'Gates',
  ),
  array(
    'id' => 4767,
    'first_name' => 'Steve',
    'last_name' => 'Jobs',
  ),
  array(
    'id' => 3809,
    'first_name' => 'Mark',
    'last_name' => 'Zuckerberg',
  )
);

$user2 = array(
  array(
    'id' => 5698,
    'first_name' => 'Bill2',
    'last_name' => 'Gates',
  ),
  array(
    'id' => 4767,
    'first_name' => 'Steve2',
    'last_name' => 'Jobs',
  ),
  array(
    'id' => 3809,
    'first_name' => 'Mark2',
    'last_name' => 'Zuckerberg',
  )
);


$keys = array('Bill', 'Jack', 'Mark', 'Steve', 'Lilei');
$values = array(18, 19, 20, 21);


//var_dump(array_keys($keys));

// $newKeys = array_map(function($v) {
// 	$v['id'] = $v['id'] + 1;
// 	$v['first_name'] = strtoupper($v['first_name']);
// 	$v['last_name'] = strtolower($v['last_name']);
// 	return $v;
// }, $user);
// 

$info = " is the firstName";


// array_walk($user, function(&$v, $k){
//   $v['first_name'] = strtoupper($v['first_name']);
// });
// 
function myFunc($v, $k, $info) {
  $v['first_name'] = strtoupper($v['first_name']) . $info;
}


//array_walk($user, 'myFunc', $info);

//var_dump($user);
//
//$a=array("a"=>"red","b"=>"green","c"=>"blue");
array_walk($user, function(&$v, $k, $p){

  $v['first_name'] =  $v['first_name'] . $p[0] . "\n";
  $v['last_name'] =  $v['last_name'] . $p[1] . "\n";

}, array(' is first_name', ' is last_name'));


//var_dump($user);
//

echo array_sum(range(1, 10));









// var_dump(ArrayTools::getInstance()->arrayChangeKeyCase($arr, true));
// var_dump(ArrayTools::getInstance()->arrayChunk($fruits, 2));
// var_dump(ArrayTools::getInstance()->arrayColumn($user, 'first_name'));
//
// try {
// 	var_dump(ArrayTools::getInstance()->arrayCombine($keys, $values));
// } catch( Exception $e) {
// 	var_dump($e);
// }
// var_dump(ArrayTools::getInstance()->arrayCountValues($arr));


