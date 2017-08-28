<?php
/**
 * Created by PhpStorm.
 * User: baobaochu
 * Date: 2017/08/07
 * Time: 19:45
 */

//对象初始化
class foo{
    function do_foo()
    {
        echo "Doing foo.";
    }
}

$bar =new foo;
$bar->do_foo();