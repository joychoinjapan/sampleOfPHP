<?php
/**
 * Created by PhpStorm.
 * User: baobaochu
 * Date: 2017/08/20
 * Time: 6:25
 */
if ($_SERVER['REQUEST_METHOD']=='POST'){
    $defaults=$_POST;
}else{
    $defaults=array('delivery' => 'yes',
        'size' => 'medium',
        'main_dish' => array('taro','tripe'),
        'sweet' => 'cake');
}