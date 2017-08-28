<?php
/**
 * Created by PhpStorm.
 * User: baobaochu
 * Date: 2017/08/28
 * Time: 2:10
 */
$servername="localhost";
$username="root";
$password="root";
try{
    $db=new PDO("mysql:host=$servername;dbname=learningPHP", $username, $password);

}catch (Exception $e){
    print "Couldn't connect to database:".$e->getMessage();
    exit();
}

//Open dishes.csv for writing
$fn=fopen('dishes.csv','wb');
$q=$db->query("SELECT dish_name, price FROM dishes");
while($row=$q->fetch()){
    fwrite($fn,"The price if $row[0] is $row[1]\n");
}
fclose($fh);