<?php
/**
 * Created by PhpStorm.
 * User: baobaochu
 * Date: 2017/08/15
 * Time: 23:23
 */
$dimsum=array('Chicken Bun','Stuffed Duck Web','Turnip Cake');
$menu=implode(', ',$dimsum);
print $menu;

//To implode an array with no delimiter, use the empty string as the first argument to implode():
$letters = array('A','B','C','D');
print implode('',$letters);