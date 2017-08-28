<?php
/**
 * Created by PhpStorm.
 * User: baobaochu
 * Date: 2017/08/11
 * Time: 22:28
 */
class A
{
    function foo()
    {
        if(isset($this)){
            echo '$this is defined(';
            echo get_class($this);
            echo ")\n";
        }else{
            echo "\$this is not defined.\n";
        }
    }
}

class B{
    function bar()
    {
        A::foo();
    }
}

$a =new A();
$a->foo();
echo "<br>";
A::foo();
echo "<br>";
$b=new B();
$b->bar();
echo "<br>";
B::bar();

class SimpleClass{
    //成员声明
    public $var ='a default value';

    //方法声明
    public function displayVar(){
        echo $this->var;
}
}

$c=new SimpleClass();
$c->displayVar();