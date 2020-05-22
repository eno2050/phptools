<?php
/*================================================================
*   Copyright (C) 2020 Freeman  Ltd. All rights reserved.
*
*   文件名称：ArrayTools.php
*   创 建 者：Eno2050
*   创建日期：2020年05月22日
*   描    述：
*
================================================================*/


namespace Eno2050\Phptools;
use Eno2050\Phptools\Traits\Singleton;

class ArrayTools {
	use Singleton;

	// 转换数组键值大小写
	public function changeKeyCase(array $arr, $case = 'true') {
		if ($case) {
			return array_change_key_case($arr, CASE_UPPER);
		}
		return array_change_key_case($arr, CASE_LOWER);
	} 
	
}


