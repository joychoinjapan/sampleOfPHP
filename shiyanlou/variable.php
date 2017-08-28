<?php
/**
 * Created by PhpStorm.
 * User: baobaochu
 * Date: 2017/08/07
 * Time: 21:57
 */
$foo='Bob';
$bar=&$foo;
$bar="My name is $bar";
echo $bar;
echo $foo;