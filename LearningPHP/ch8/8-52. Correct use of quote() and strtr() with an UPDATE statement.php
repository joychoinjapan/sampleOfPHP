<?php
/**
 * Created by PhpStorm.
 * User: baobaochu
 * Date: 2017/08/26
 * Time: 10:30
 */
$dish=$db->quote($_POST['dish_name']);
$dish=strtr($dish,array('_'=>'\_','%'=>'\%'));
$db->exec("UPDATE dishes SET price=1 WHERE dish_name LIKE $dish");