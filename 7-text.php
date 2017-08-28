<?php
/**
 * Created by PhpStorm.
 * User: baobaochu
 * Date: 2017/07/29
 * Time: 22:25
 */
header('content-type:text/html;charset=utf-8');
//布尔的例子
$t_1=true;

$t_2=FALSE;

var_dump($t_1);
var_dump($t_2);

$dream="我有一个亿";
$dream=FALSE;

if($dream){
    echo '我就在北京3环买个房';
}else{
    echo '只能敲代码';
}
