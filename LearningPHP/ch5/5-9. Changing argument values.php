<?php
/**
 * Created by PhpStorm.
 * User: baobaochu
 * Date: 2017/08/16
 * Time: 16:22
 */

function countdown($top){
    while($top>0){
        print "$top...";
        $top--;
        print "<br/>";
    }
    print "boom!";
}

$counter=5;
countdown($counter);
print "Now ,counter is $counter";