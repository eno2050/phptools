<?php

namespace Eno2050\phpTools;
/**
 * 猜测就是用来兼容链接各种数据库的，用一套扩展库可以链接所有的数据库
 * Pdo 
 * PdoStatement
 * PdoExcrption
 */

class PdoTools {

	use Eno2050\phpTools\Traits\Singleton;

	private $config = array(
		'dbms' => '', // 数据库类型
		'host' => '', // 数据库主机
		'dbname' => '',
		'user' => '',
		'password' => '',
	);

	public function __construct($config) {

		if (empty($config)) {
			
		}

	}



}