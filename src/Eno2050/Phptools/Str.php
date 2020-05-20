<?php
/*================================================================
*   Copyright (C) 2020 Freeman  Ltd. All rights reserved.
*   
*   文件名称：str.php
*   创 建 者：Eno2050
*   创建日期：2020年05月20日
*   描    述：
*
================================================================*/
namespace Eno2050\Phptools;
use Eno2050\Phptools\Traits\Singleton;

class Str {
    use Singleton;

    public function sayHello() {
        echo "hello world";
    }

}
