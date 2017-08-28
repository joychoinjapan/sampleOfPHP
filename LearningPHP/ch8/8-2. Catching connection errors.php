<?php
/**
 * Created by PhpStorm.
 * User: baobaochu
 * Date: 2017/08/22
 * Time: 20:57
 */
try{
    $db=new PDO('mysql:host=localhost;dbname=restaurant','penguin','top^hat');
}catch (PDOException $e){
    print "Couldn't connect to the database:".$e->getMessage();
}