<?php
/*================================================================
*   Copyright (C) 2020 Freeman  Ltd. All rights reserved.
*
*   文件名称：input.php
*   创 建 者：Eno2050
*   创建日期：2020年06月18日
*   描    述：
*
================================================================*/
$pat = "/\d+/";

numberA:
fwrite(STDOUT, '请输入数字A: ');

$argA = trim(fgets(STDIN));
if (empty($argA))  {
	echo "输入不能为空\n";
	goto numberA;
}
if (!preg_match($pat, $argA)) {
	echo "必须输入数字\n";
	goto numberA;
}

numberB:
fwrite(STDOUT, '请输入数字B: ');

$argB = trim(fgets(STDIN));

if (empty($argB)) {
	echo "输入不能为空\n";
	goto numberB;
}

if (!preg_match($pat, $argB)) {
	echo "必须输入的是数字\n";
	goto numberB;
}


//echo 'A + B = '. (intval($argA) + intval($argB));
echo 'A + B = '. ($argA + $argB);

