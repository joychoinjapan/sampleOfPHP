<?php
/**
 * Created by PhpStorm.
 * User: baobaochu
 * Date: 2017/08/28
 * Time: 13:08
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

//Open the CSV file for writing
$fh=fopen('dish-list.csv','wb');
$dishes=$db->query('SELECT dish_name, price, is_spicy FROM dishes');
while($row=$dishes->fetch(PDO::FETCH_NUM)){
    // Write the data in $row as a CSV-formatted string. fputcsv()
    // adds a newline at the end.
    fputcsv($fh,$row);
}
fclose($fh);