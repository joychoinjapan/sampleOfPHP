<?php
/**
 * Created by PhpStorm.
 * User: baobaochu
 * Date: 2017/08/28
 * Time: 13:42
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
// Tell the web client that a CSV file called "dishes.csv" is coming
header('Content-Type:text/csv');
header('Content-Disposition:attachment;filename="dishes.csv');
// Open a file handle to the output stream
$fh=fopen('php://output','wb');
// Retrieve the info from the database table and print it
$dishes=$db->query('SELECT dish_name, price, is_spicy FROM dishes');
while($row=$dishes->fetch(PDO::FETCH_NUM)){
    fputcsv($fh,$row);
}