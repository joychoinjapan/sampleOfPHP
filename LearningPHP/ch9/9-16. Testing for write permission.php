<?php
/**
 * Created by PhpStorm.
 * User: baobaochu
 * Date: 2017/08/28
 * Time: 13:51
 */
$log_file='users.log';
if(is_writable($log_file)){
    $fh=fopen($log_file,'ab');
    fwrite($fh,$_SESSION['username'].' at '.strftime('%c')."\n");
    fclose($fh);
}else{
    print "Cant write to log file.";
}