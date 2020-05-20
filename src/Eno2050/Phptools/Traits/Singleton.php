<?php
/*================================================================
*   Copyright (C) 2020 Freeman  Ltd. All rights reserved.
*   
*   文件名称：Singleton.php
*   创 建 者：Eno2050
*   创建日期：2020年05月20日
*   描    述：
*
================================================================*/
namespace Eno2050\Phptools\Traits;
trait Singleton {

   private static $instance = null;
    
   /*
    获取对象单例
   */
   public static function getInstance(array $config = []):self {
   
     if (!self::$instance instanceof self) {
        self::$instance = new static($config);
     }
      
     return self::$instance;
   }

}

