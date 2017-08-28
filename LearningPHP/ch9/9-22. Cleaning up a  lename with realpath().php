<?php
/**
 * Created by PhpStorm.
 * User: baobaochu
 * Date: 2017/08/28
 * Time: 14:26
 */
$filename = realpath("/usr/local/data/$_POST[user]");
if (('/usr/local/data/' == substr($filename, 0, 16))
    && is_readable($filename)) {
    print 'User profile for ' . htmlentities($_POST['user'])
        .': <br/>';
    print file_get_contents($filename);
}else{
    print "Invalid user entered.";
}