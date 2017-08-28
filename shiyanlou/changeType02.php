<?php
/**
 * Created by PhpStorm.
 * User: baobaochu
 * Date: 2017/08/07
 * Time: 20:01
 */
$foo=10;
$bar=(boolean)$foo;

var_dump($bar);

$num=234;
$num=(string)$num;
var_dump($num);
$num=(float)$num;
var_dump($num);


$string="gogogo";
$b= (boolean)$string;

var_dump($b);

$num=-1;
$b=(boolean)$num;

var_dump($b);