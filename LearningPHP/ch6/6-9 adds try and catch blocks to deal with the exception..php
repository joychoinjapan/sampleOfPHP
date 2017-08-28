<?php
/**
 * Created by PhpStorm.
 * User: baobaochu
 * Date: 2017/08/18
 * Time: 0:55
 */
require('newEntree.php');
try{
    $drink =new newEntree('Glass of milk','milk');
    if($drink->hasIngredient('milk')){
        print "Yummy!";
    }
}catch (Exception $e){
    print "Couldn't create the drink: ".$e->getMessage();
}