<?php
/**
 * Created by PhpStorm.
 * User: baobaochu
 * Date: 2017/08/24
 * Time: 7:48
 */
$servername="localhost";
$username="root";
$password="root";
try{
    $conn=new PDO("mysql:host=$servername;dbname=learningPHP", $username, $password);
   $stmt=$conn->prepare('INSERT INTO dishes (dish_name) VALUES (?)');
   $stmt->execute(array($_POST['new_dish_name']));
}catch (PDOException $e){
    print "Couldn't update a row:".$e->getMessage();
}