<?php
/**
 * Created by PhpStorm.
 * User: baobaochu
 * Date: 2017/08/28
 * Time: 8:08
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
$fh=fopen('dishes.csv','rb');
$stmt=$db->prepare('INSERT INTO dishes(dish_name,price,is_spicy)VALUES(?,?,?)');
while((!feof($fh))&&($info=fgetcsv($fh))){
    // $info[0] is the dish name    (the  first field in a line of dishes.csv)
    // $info[1] is the price        (the second field)
    // $info[2] is the spicy status (the  third field)
    // Insert a row into the database table
    $stmt->execute($info);
    print "Inserted $info[0]<br>";
}
fclose($fh);