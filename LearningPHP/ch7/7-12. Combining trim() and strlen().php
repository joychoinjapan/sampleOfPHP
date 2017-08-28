<?php
/**
 * Created by PhpStorm.
 * User: baobaochu
 * Date: 2017/08/18
 * Time: 23:14
 */
if(strlen(trim($_POST['name']))==0){
    $errors[]="Your name is required";
}