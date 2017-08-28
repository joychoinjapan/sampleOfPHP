<?php
/**
 * Created by PhpStorm.
 * User: baobaochu
 * Date: 2017/08/24
 * Time: 3:11
 */
$servername="localhost";
$username="root";
$password="root";
try{
    $conn=new PDO("mysql:host=$servername;dbname=learningPHP", $username, $password);
    echo "success";
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // 设置 PDO 错误模式为异常
    $sql2="UPDATE dishes SET price = price+5 WHERE price>3";
    $count=$conn->exec($sql2);
    print 'Changed the price of '.$count.'rows';
}catch (PDOException $e){
    print "Couldn't update a row:".$e->getMessage();
}