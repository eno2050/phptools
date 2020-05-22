# phptools
php开发工具包

## 实例化单例类

```
    use Eno2050\Phptools\Traits\Singleton;

    class user {
        use Singleton;
        public function sayHello(){
            return 'hello world';
        }
    }
    
    $user = User::getInstance();
    echo $user->sayHello();

```

## arrayTools 数组工具类


- changeKeyCase
	```
		@param array $arr 要转换的数组
		@param boolean $flag 默认true 转换成大写
		@return array
	```
