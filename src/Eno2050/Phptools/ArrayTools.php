<?php
/*================================================================
*   Copyright (C) 2020 Freeman  Ltd. All rights reserved.
*
*   文件名称：ArrayTools.php
*   创 建 者：Eno2050
*   创建日期：2020年05月22日
*   描    述：php数组工具类
*
================================================================*/


namespace Eno2050\Phptools;
use Eno2050\Phptools\Traits\Singleton;

class ArrayTools {
	use Singleton;

	/**
	 * 转换数组键值的大小写
	 * @param  array  $arr  待转换的数组
	 * @param  boolean $case 转换成大写还是小写 默认：大写
	 * @return array
	 */			
	public function arrayChangeKeyCase(array $arr, $case = true) {
		if ($case) {
			return array_change_key_case($arr, CASE_UPPER);
		}
		return array_change_key_case($arr, CASE_LOWER);
	}

	/**
	 * 数组进行切片
	 * @param  array   $arr  原数组
	 * @param  int     $size 长度
	 * @param  boolean $flag 是否跟换索引 注意：这个值指针与非索引数组有效。
	 * @return array   新数组   
	 */
	public function arrayChunk(array $arr, int $size, $flag = true) {
		if ($flag) {
			return array_chunk($arr, $size, $flag);
		} else {
			return array_chunk($arr, $size);
		}
	}

	/**
	 * 取出二维数组指定的列								
	 * @param  array  $arr       原数组						
	 * @param  [type] $column    列的名字	
	 * @param  string $index_key 指定键
	 * @return array             新的列组成的数组
	 */
	public function arrayColumn(array $arr, $column, $index_key = '') {

		if ($index_key) {
			return array_column($arr, $column, $index_key);
		} else {
			return array_column($arr, $column);
		}

	}

	/**
	 * 把键数组和值数组进行合并
	 * 注意：键名数组和键值数组的元素个数必须相同！如果其中一个数组为空，或者两个数组的元素个数不同，则该函数返回 false。
	 * @param  array  $keys   键数组
	 * @param  array  $values 值数组
	 * @return array         新数组
	 */
	public function arrayCombine(array $keys, array $values) {

		return array_combine($keys, $values);

	}
	/**
	 * 计算数组中值出现的次数
	 * @param  array  $arr 原数组
	 * @return array 每个值出现的次数
	 */
	public function arrayCountValues(array $arr) {

		return array_count_values($arr);
	}

	


	
}


