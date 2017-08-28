<?php
/**
 * Created by PhpStorm.
 * User: baobaochu
 * Date: 2017/07/29
 * Time: 22:36
 */

//字符串定界符：单引号 双引号 heredoc nowdoc

$usrname='king';
$email="32423423@qq.com";

$em_string='';
var_dump($em_string);

var_dump($usrname);

echo '<hr/>';

echo 'This is a test<br/>';

echo "hello World<br/>";

$username='king';

//echo 语句可以输出多个字符串 以逗号分割
//单引号不解析变量，双引号解析变量
echo $username,'<br/>',$email;

echo '$username','<br/>';

echo "$username",'<br/>';

//单引号和双引号的第二个区别:
//单引号反斜杠只能解析¥' ¥\
// He said I'm fine

$str='He said I\'m fine';
echo $str;