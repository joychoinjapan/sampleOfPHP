<?php
/**
 * Created by PhpStorm.
 * User: baobaochu
 * Date: 2017/9/6
 * Time: 10:49
 */
class Singleton{
    private  static $instance;

    //私有构造方法，禁止使用new创建对象

    private function __construct()
    {
    }

    public static function getInstance(){
        if(!isset(self::$instance)){
            self::$instance=new self;
        }
        return self::$instance;
    }

    //将克隆方法设为私有，禁止克隆对象
    private function __clone()
    {
        // TODO: Implement __clone() method.
    }

    public function say(){
        echo "这是单例模式创建对象实例<br>";
    }

    public function operation(){
        echo "这里可以添加其他方法和操作<br>";
    }
}

$shiyanlou=Singleton::getInstance();
$shiyanlou->say();
$shiyanlou->operation();

$newShiyanlou=Singleton::getInstance();
var_dump($shiyanlou===$newShiyanlou);