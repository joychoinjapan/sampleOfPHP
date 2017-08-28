<?php
/**
 * Created by PhpStorm.
 * User: baobaochu
 * Date: 2017/08/17
 * Time: 3:09
 */
$dinner='Curry cuttlefish';
function hungry_dinner(){
    $GLOBALS['dinner'] .=" and Deep-Fried Taro";
}
print "Regular dinner is $dinner";
print "<br/>";
hungry_dinner();
print "Hungry dinner is $dinner";
