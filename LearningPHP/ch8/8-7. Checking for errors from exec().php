<?php
/**
 * Created by PhpStorm.
 * User: baobaochu
 * Date: 2017/08/23
 * Time: 7:32
 */
//该例子改版为mysql版
$servername="localhost";
$username="root";
$password="root";

try{
    $conn=new PDO("mysql:host=$servername;dbname=learningPHP", $username, $password);
    // 设置 PDO 错误模式为异常
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql="INSERT INTO dishes (dish_size, dish_name,
                                                   price, is_spicy)
                                   VALUES ('large', 'Sesame Seed Puff', 2.50, 0)";
    $conn->exec($sql);


}catch (PDOException $e){
    print "Couldn't insert a row:" . $e->getMessage();
}