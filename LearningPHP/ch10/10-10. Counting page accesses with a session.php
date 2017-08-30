<?php
/**
 * Created by PhpStorm.
 * User: baobaochu
 * Date: 2017/08/29
 * Time: 11:33
 */
session_start();
if(isset($_SESSION['count'])){
    $_SESSION['count']=$_SESSION['count']+1;
}else{
    $_SESSION['count']=1;
}

print "You've looked at this page ".$_SESSION['count'].' times';