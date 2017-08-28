<?php
/**
 * Created by PhpStorm.
 * User: baobaochu
 * Date: 2017/08/28
 * Time: 14:06
 */
$page=file_get_contents('page-template.html');
//Note the three equals signs in the test expression
if($page===false){
    print "Couldn't load template: $php_errormsg";
}else{
    //process template here;
}