<?php
/**
 * Created by PhpStorm.
 * User: baobaochu
 * Date: 2017/08/25
 * Time: 14:21
 */
$servername="localhost";
$username="root";
$password="root";
try{
    $db=new PDO("mysql:host=$servername;dbname=learningPHP", $username, $password);
    $q=$db->query('SELECT dish_name,price FROM dishes');
    // $rows will be a four-element array; each element is // one row of data from the database
    $rows=$q->fetchAll();
    foreach ($rows as $row ){
        print $row[dish_name]." ".$row[price];
        print "<br>";
    }

}catch (PDOException $e){
    print $e->getMessage();
}