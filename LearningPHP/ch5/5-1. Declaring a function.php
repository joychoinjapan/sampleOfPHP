<?php
/**
 * Created by PhpStorm.
 * User: baobaochu
 * Date: 2017/08/16
 * Time: 15:06
 */
function page_header(){
    print '<html><head><title>Welcome to my site</title></head>';
    print '<body bgcolor="#fffff">';
}

//5-2. Calling a function
page_header();
print "Welcome";
print "</body></html>";