<?php
/**
 * Created by PhpStorm.
 * User: baobaochu
 * Date: 2017/08/18
 * Time: 23:08
 */
$ok=filter_input(INPUT_POST,'price',FILTER_VALIDATE_FLOAT);
if(is_null($ok)||($ok===false)){
    $errors[]='Please enter a valid age.';
}