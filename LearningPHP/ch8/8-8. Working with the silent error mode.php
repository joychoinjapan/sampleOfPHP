<?php
/**
 * Created by PhpStorm.
 * User: baobaochu
 * Date: 2017/08/23
 * Time: 9:43
 */
$servername="localhost";
$password="root";
$username="root";

try{
    $db=new PDO("mysql:host=$servername;dbname=learningPHP", $username, $password);
}catch (PDOException $e){
    print "Couldn't connect: " . $e->getMessage();
}
$result = $db->exec("INSERT INTO dishes (dish_size, dish_name, price, is_spicy)
                         VALUES ('large', 'Sesame Seed Puff', 2.50, 0)");
if(false===$result){
    $error=$db->errorInfo();
    print "Couldn't insert";
    print "<br/>";
    print "SQL Error={$error[0]},DB Error={$error[1]},Message Error={$error[2]}";
}