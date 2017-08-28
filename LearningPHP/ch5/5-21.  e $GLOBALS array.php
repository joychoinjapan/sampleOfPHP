<?php
/**
 * Created by PhpStorm.
 * User: baobaochu
 * Date: 2017/08/17
 * Time: 3:02
 */
$dinner='Curry Cuttlefish';
function macrobiotic_dinner(){
    $dinner ="Some Vegetables";
    print "dinner is $dinner";

    // Succumb to the delights of the ocean
    print "but I'd rather have ";
    print $GLOBALS['dinner'];
    print "<br/>";
}

macrobiotic_dinner();
print "Regular dinner is $dinner";