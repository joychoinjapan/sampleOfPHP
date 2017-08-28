<?php
/**
 * Created by PhpStorm.
 * User: baobaochu
 * Date: 2017/08/25
 * Time: 17:00
 */
$servername="localhost";
$username="root";
$password="root";
try{
    $db=new PDO("mysql:host=$servername;dbname=learningPHP", $username, $password);
    $q=$db->query('SELECT dish_name,price FROM dishes ORDER BY price LIMIT 1');
    // $rows will be a four-element array; each element is // one row of data from the database
    $cheapest_dish_info =$q->fetch();
    print $cheapest_dish_info[0]." ".$cheapest_dish_info[1];

}catch (PDOException $e){
    print $e->getMessage();
}