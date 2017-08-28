<?php
/**
 * Created by PhpStorm.
 * User: baobaochu
 * Date: 2017/08/25
 * Time: 17:31
 */
$servername="localhost";
$username="root";
$password="root";
try{
    $db=new PDO("mysql:host=$servername;dbname=learningPHP", $username, $password);
    // No need to pass anything to fetch(); setFetchMode() // takes care of it
    $q=$db->query('SELECT dish_name, price FROM dishes');
    $q->setFetchMode(PDO::FETCH_NUM);
    while ($row=$q->fetch()){
        print implode(', '.$row)."<br>";

    }

    // No need to call setFetchMode() or pass anything to fetch(); // setAttribute() takes care of it
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_NUM);
    $q = $db->query('SELECT dish_name, price FROM dishes');
    while ($row = $q->fetch()) {
        print implode(',    ', $row) . "<br>";
    }
    $anotherQuery=$db->query('SELECT dish_name, price FROM dishes');
    $moreDishes=$anotherQuery->fetchAll();
    foreach ($moreDishes as $value){
        print implode('!, ',$value).'<br>';
    }


}catch (PDOException $e){
    print $e->getMessage();
}