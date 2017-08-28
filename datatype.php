<?php
/**
 * Created by PhpStorm.
 * User: baobaochu
 * Date: 2017/08/07
 * Time: 18:22
 */

//PHP 中没有整除的运算符。1/2 产生出 float 0.5。值可以舍弃小数部分强制转换为 integer，或者使用 round() 函数可以更好地进行四舍五入。
var_dump(25/7);
var_dump((int)(25/7));
var_dump(round(25/7));// float(4)

echo '<hr/>';