<?php
/**
 * Created by PhpStorm.
 * User: baobaochu
 * Date: 2017/08/18
 * Time: 22:58
 */
$ok=filter_input(INPUT_POST,'age',FILTER_VALIDATE_INT);
if(is_null($ok)||($ok===false)){
    $errors[]='Please enter a valid age.';
}