<?php
/**
 * Created by PhpStorm.
 * User: baobaochu
 * Date: 2017/08/25
 * Time: 17:48
 */
$servername="localhost";
$username="root";
$password="root";
try{
    $db=new PDO("mysql:host=$servername;dbname=learningPHP", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt=$db->prepare('SELECT dish_name,price FROM dishes WHERE dish_name LIKE ?');
    $stmt->execute(array($_POST['dish_search']));
    while ($row=$stmt->fetch()){

    }

}catch (PDOException $e){
    print $e->getMessage();
}