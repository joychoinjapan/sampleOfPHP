<?php
/**
 * Created by PhpStorm.
 * User: baobaochu
 * Date: 2017/08/24
 * Time: 2:51
 */

$servername="localhost";
$username="root";
$password="root";

try{
    $conn=new PDO("mysql:host=$servername;dbname=learningPHP", $username, $password);
    echo "success";
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // 设置 PDO 错误模式为异常
    $sql2="DELETE from dishes WHERE price>9";
    $conn->exec($sql2);
}catch (PDOException $e){
    print "Couldn't update a row:".$e->getMessage();
}