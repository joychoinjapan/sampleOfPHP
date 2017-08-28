<?php
/**
 * Created by PhpStorm.
 * User: baobaochu
 * Date: 2017/08/23
 * Time: 7:15
 */
//该例子改版为mysql版
$servername="localhost";
$username="root";
$password="root";

try{
    $conn=new PDO("mysql:host=$servername;dbname=learningPHP", $username, $password);
    // 设置 PDO 错误模式为异常
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql="USE learningPHP";

    // 使用 exec() ，因为没有结果返回
    $conn->exec($sql);

    $sql2="CREATE TABLE dishes(
  dish_id INTEGER PRIMARY KEY AUTO_INCREMENT,
  dish_name VARCHAR(255),
  price DECIMAL(4,2),
  is_spicy INT
)";
    $conn->exec($sql2);
}catch (PDOException $e){
    print "Couldn't create table: " . $e->getMessage();
}
