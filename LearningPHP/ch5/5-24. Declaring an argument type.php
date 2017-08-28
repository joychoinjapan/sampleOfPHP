<?php
/**
 * Created by PhpStorm.
 * User: baobaochu
 * Date: 2017/08/17
 * Time: 3:36
 */
function countdown(int $top){
    while($top>0){
        print "$top..";
        $top--;
    }
    print "boom!\n";
}

$counter=5;
countdown($counter);
print "Now,counter is $counter";