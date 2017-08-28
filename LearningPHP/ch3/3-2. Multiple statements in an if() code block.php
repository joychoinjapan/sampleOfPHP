<?php
/**
 * Created by PhpStorm.
 * User: baobaochu
 * Date: 2017/08/13
 * Time: 17:34
 */
$logged_in=true;
print "This is always printed";
if($logged_in){
    print "Welcome abord,trusted user";
    print 'This is only printed if $logged_in is true.';
}
print "This is also always printed.";