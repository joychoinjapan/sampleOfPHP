<?php
/**
 * Created by PhpStorm.
 * User: baobaochu
 * Date: 2017/08/25
 * Time: 10:59
 */
$servername="localhost";
$username="root";
$password="root";
try{
    $db=new PDO("mysql:host=$servername;dbname=learningPHP", $username, $password);
    $q=$db->query('SELECT dish_name,price FROM dishes');
    while($row=$q->fetch()){
        print "$row[dish_name],$row[price] ";
        print "<br>";
    }

}catch (PDOException $e){
    print $e->getMessage();
}