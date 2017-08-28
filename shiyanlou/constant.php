<?php
/**
 * Created by PhpStorm.
 * User: baobaochu
 * Date: 2017/08/08
 * Time: 14:24
 */
/*
    常量前面没有美元符号（$）；
    常量只能用 define() 函数定义，而不能通过赋值语句；
    常量可以不用理会变量的作用域而在任何地方定义和访问；
    常量一旦定义就不能被重新定义或者取消定义；
    常量的值只能是标量。
*/

//Example1
define("CONSTANT","Hello world");
echo CONSTANT;
echo "<br/>";
//Example2
const CONSTANT2="nice job";
echo CONSTANT2;
//和使用 define() 来定义常量相反的是，使用 const 关键字定义常量必须处于最顶端的作用区域，因为用此方法是在编译时定义的。这就意味着不能在函数内，循环内以及 if 语句之内用 const 来定义常量。
echo __LINE__;
echo "<br/>";
echo __DIR__;
echo "<br/>";
echo __FILE__;
echo "<br/>";
echo __FUNCTION__;
echo "<br/>";
echo __CLASS__;
echo "<br/>";
echo __TRAIT__;
echo "<br/>";
echo __METHOD__;
echo "<br/>";