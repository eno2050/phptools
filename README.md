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
