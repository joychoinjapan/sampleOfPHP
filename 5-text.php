<?php
/**
 * Created by PhpStorm.
 * User: baobaochu
 * Date: 2017/07/29
 * Time: 22:13
 */

//声明整型

$var="122";

echo $var;

//打印变量详细信息
var_dump($var);

//声明八进制的整数
$var=0123;
var_dump($var);
$var=0xff00;
var_dump($var);

$a=$b=$c=123;
var_dump($a,$b,$c);