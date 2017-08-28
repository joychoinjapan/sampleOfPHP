<?php
/**
 * Created by PhpStorm.
 * User: baobaochu
 * Date: 2017/08/18
 * Time: 22:48
 */
if(strlen($_POST['email'])==0){
    $errors[]="You must enter an email address.";
}