<?php
/**
 * Created by PhpStorm.
 * User: baobaochu
 * Date: 2017/08/17
 * Time: 3:23
 */
//通过 global 关键字从外部通过函数更改全域函数的方法2，出了函数区域也更改了
$dinner = 'Curry Cuttlefish';

function vegetarian_dinner(){
    global $dinner;
    print "Dinner was $dinner ,but now it's ";
    //全域参数发生了变化，出了函数区域，也变化了。
    $dinner ='Sauteed Pea Shoots';
    print $dinner;
    print "<br>";
}

print "Regular Dinner is $dinner ";
print "<br>";
vegetarian_dinner();
print "<br>";
print "Regular dinner is $dinner";